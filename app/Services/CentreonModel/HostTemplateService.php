<?php

namespace App\Services\CentreonModel;

use App\Model\Eloquent\centreon\Host;
use Illuminate\Database\Eloquent\Builder;

class HostTemplateService {

    public function getList () {
        return Host::where([
            'host_register' => '0', // a template
            'host_activate' => '1', // enabled
        ])->get();
    }

    public function getAssociatedChildHosts (Host $ht) {
        return Host::whereHas('parentTemplates', function ($q) use ($ht) {
            /* @var Builder $q */
            return $q->where('host_template_relation' . '.' . 'host_tpl_id', $ht->getKey());
        })
            ->whereHostRegister('1') // not a template
            ->whereHostActivate('1') // enabled
            ->get();
    }

    public function getAssociatedChildHostNames (Host $ht) {
        return Host::whereHas('parentTemplates', function ($q) use ($ht) {
            /* @var Builder $q */
            return $q->where('host_template_relation' . '.' . 'host_tpl_id', $ht->getKey());
        })
            ->whereHostRegister('1') // not a template
            ->whereHostActivate('1') // enabled
            ->pluck('host_name');
    }

    public function getAssociatedChildHostTemplates (Host $ht) {
        return Host::whereHas('parentTemplates', function ($q) use ($ht) {
            /* @var Builder $q */
            return $q->where('host_template_relation' . '.' . 'host_tpl_id', $ht->getKey());
        })
            ->whereHostRegister('0') // a template
            ->whereHostActivate('1') // enabled
            ->get();
    }

    public function getAssociatedChildHostTemplateNames (Host $ht) {
        return Host::whereHas('parentTemplates', function ($q) use ($ht) {
            /* @var Builder $q */
            return $q->where('host_template_relation' . '.' . 'host_tpl_id', $ht->getKey());
        })
            ->whereHostRegister('0') // a template
            ->whereHostActivate('1') // enabled
            ->pluck('host_name');
    }
}