<?php

namespace App\Services\CentreonModel;

use App\Model\Eloquent\centreon\Host;
use App\Model\Eloquent\centreon\HostGroup;
use App\Model\Eloquent\centreon_storage\Host as StorageHost;
use App\Model\Eloquent\centreon_storage\HostGroup as StorageHostGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class HostGroupService {

    /**
     * @param HostGroup $hg
     * @return StorageHostGroup|null
     */
    public function getInstanceSyncedInCentreonStorageDb (HostGroup $hg) {
        return StorageHostGroup::find($hg->getKey());
    }

    /**
     * @param HostGroup $hg
     * @param StorageHostGroup $syncedHg
     * @return Collection
     */
    public function getHostIdsAssociationsNotSyncedInCentreonStorageDb (HostGroup $hg, StorageHostGroup $syncedHg) {
        $hgHostAssocsInCentreonDb = $this->getAssociatedHostIdsForInstanceInCentreonDb($hg);
        $hgHostAssocsInCentreonStorageDb = $this->getAssociatedHostIdsForInstanceInCentreonStorageDb($syncedHg);

        return $hgHostAssocsInCentreonDb->diff($hgHostAssocsInCentreonStorageDb);
    }

    public function getAssociatedHostIdsForInstanceInCentreonDb (HostGroup $hg) {
        $hostPrimaryKeyName = (new Host())->getKeyName();

        return Host::whereHas('hostGroups', function ($q) use ($hg) {
            /* @var Builder $q */
            return $q->where($hg->getTable() . '.' . $hg->getKeyName(), $hg->getKey());
        })
            ->whereHostRegister('1') // not a template
            ->whereHostActivate('1') // enabled
            ->pluck($hostPrimaryKeyName);
    }

    public function getAssociatedHostIdsForInstanceInCentreonStorageDb (StorageHostGroup $hg) {
        $hostPrimaryKeyName = (new StorageHost())->getKeyName();

        return StorageHost::whereHas('hostGroups', function ($q) use ($hg) {
            /* @var Builder $q */
            return $q->where($hg->getTable() . '.' . $hg->getKeyName(), $hg->getKey());
        })->pluck($hostPrimaryKeyName);
    }
}