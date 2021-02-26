<?php

namespace App\Services\CentreonModel;

use App\Model\Eloquent\centreon\Host;
use App\Model\Eloquent\centreon\HostGroup;
use App\Model\Eloquent\centreon\Service;
use App\Model\Eloquent\centreon_storage\Host as StorageHost;

class HostService {

    // -------------------------------------------------------------------
    // GENERAL

    static private $BRIEF_COLS = [
        'host_id',
        'host_name',
        'host_alias',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Collection|Host[]
     */
    public function getList ($brief = false) {
        $selector = Host::where([
            'host_register' => '1', // not a template
            'host_activate' => '1', // enabled
        ]);

        if ($brief)
            return $selector->get(self::$BRIEF_COLS);
        else
            return $selector->get();
    }


    // -------------------------------------------------------------------
    // SYNC W/ centreon_storage

    /**
     * @param Host $host
     * @return StorageHost|null
     */
    public function getInstanceSyncedInCentreonStorageDb (Host $host) {
        return StorageHost::find($host->getKey());
    }


    // -------------------------------------------------------------------
    // HOST GROUPS

    public function addHostGroupReplacingOtherHostGroup (Host $host, HostGroup $newHg, HostGroup $oldHg) {
        $host->hostGroups()->detach($oldHg->getKey());
        $host->save();

        $host->hostGroups()->attach($newHg->getKey());
        $host->save();
    }


    // -------------------------------------------------------------------
    // HOST TEMPLATES

    /**
     * NB: the lower the order, the more precedence it has
     *
     * @param Host $host
     * @return Host[]
     */
    public function getOrderedParentTemplateList (Host $host) {
        $parentTemplateList = [];
        foreach ($host->parentTemplates as $hostTemplate) {
            $orderId = intval($hostTemplate->pivot->order) - 1;
            $parentTemplateList[$orderId] = $hostTemplate;
        }

        ksort($parentTemplateList);
        // NB: the lower the order, the more precedence it has, so we reverse that
        $parentTemplateList = array_reverse($parentTemplateList);

        return $parentTemplateList;
    }

    public function getRecursiveOrderedParentTemplateList (Host $host, $generation=0) {
        $recursiveParentTemplateList = [];

        $parentTemplateList = $this->getOrderedParentTemplateList($host);
        // NB: here we use a prefix to force the key to be interpreted as a string by array_merge_recursive
        $recursiveParentTemplateList["gen_$generation"] = $parentTemplateList;

        foreach ($parentTemplateList as $hostTemplate) {
            $olderTemplateList = $this->getRecursiveOrderedParentTemplateList($hostTemplate, $generation+1);
            $recursiveParentTemplateList = array_merge_recursive($recursiveParentTemplateList, $olderTemplateList);
        }

        if($generation === 0) {
            // we replace the string-prefixed keys by their numerical equivalent
            $recursiveParentTemplateList = array_values($recursiveParentTemplateList);

            // we get the oldest first
            $recursiveParentTemplateList = array_reverse($recursiveParentTemplateList);
        }

        return $recursiveParentTemplateList;
    }

    public function addTemplateReplacingOtherTemplate (Host $host, Host $newTemplate, Host $existingTemplate) {
        $existingTemplateOrderId = null;

        $parentTemplateList = [];
        foreach ($host->parentTemplates as $ht) {
            $orderId = intval($ht->pivot->order);
            $parentTemplateList[$orderId - 1] = $ht;
            if ($ht->host_id === $newTemplate->host_id) {
                // existing template already set, exiting
                // NB: we could have the intelligence to move it at the right index in that case
                return false;
            }
            if ($ht->host_id === $existingTemplate->host_id) {
                $existingTemplateOrderId = $orderId;
            }
        }

        if (! isset($existingTemplateOrderId))
            return false;

        $host->parentTemplates()->detach($existingTemplate->host_id);
        $host->save();

        //ksort($parentTemplateList);

        $host->parentTemplates()->attach($newTemplate->host_id, ['order' => $existingTemplateOrderId]);
        $host->save();

        return true;
    }

    public function addTemplateOnTopOfOtherTemplate (Host $host, Host $newTemplate, Host $existingTemplate) {
        $existingTemplateOrderId = null;

        $parentTemplateList = [];
        foreach ($host->parentTemplates as $ht) {
            $orderId = intval($ht->pivot->order);
            $parentTemplateList[$orderId - 1] = $ht;
            if ($ht->host_id === $newTemplate->host_id) {
                // existing template already set, exiting
                // NB: we could have the intelligence to move it at the right index in that case
                return false;
            }
            if ($ht->host_id === $existingTemplate->host_id) {
                $existingTemplateOrderId = $orderId;
            }
        }

        if (! isset($existingTemplateOrderId))
            return false;

        ksort($parentTemplateList);

        // we switch all order ids by 1
        foreach ($parentTemplateList as $orderId => $ht) {
            $orderId = $orderId + 1;
            if ($orderId < $existingTemplateOrderId)
                continue;
            $host->parentTemplates()->updateExistingPivot($ht->host_id, ['order' => $orderId + 1]);
            $host->save();
            // NB: We do it at each change to prevent eloquent from
            //     buffering queries in wrong order and potentially
            //     breaking MySQL table constraints.
        }

        $host->parentTemplates()->attach($newTemplate->host_id, ['order' => $existingTemplateOrderId]);
        $host->save();

        return true;
    }


    // -------------------------------------------------------------------
    // SERVICE TEMPLATES FROM PARENT HOST TEMPLATES

    public function getInheritedServiceTemplateList (Host $host, $keepParentHt = false) {
        $inheritedServiceTemplateList = [];

        $recursiveParentTemplateList = $this->getRecursiveOrderedParentTemplateList($host);

        foreach ($recursiveParentTemplateList as $generation => $parentTemplateList) {
            /* @var Host[] $parentTemplateList */
            foreach ($parentTemplateList as $parentTemplate) {
                foreach($parentTemplate->services as $service) {
                    if ($keepParentHt)
                        $inheritedServiceTemplateList[$service->service_alias] = [
                            "st" => $service,
                            "ht" => [
                                "id" => $parentTemplate->host_id,
                                "name" => $parentTemplate->host_name,
                            ],
                        ];
                    else
                        $inheritedServiceTemplateList[$service->service_alias] = $service;
                }
            }
        }

        return $inheritedServiceTemplateList;
    }

    /**
     * @param Host $host
     * @param Service $service
     * @param array $inheritedServiceTemplateList
     * @return Service|null
     */
    public function getServiceTemplateFromHostForService (Host $host, Service $service, $inheritedServiceTemplateList=[]) {
        if (empty($inheritedServiceTemplateList))
            $inheritedServiceTemplateList = $this->getInheritedServiceTemplateList($host);

        foreach ($inheritedServiceTemplateList as $serviceTemplate) {
            if ($service->service_description === $serviceTemplate->service_alias)
                return $serviceTemplate;
        }
        return null;
    }
}
