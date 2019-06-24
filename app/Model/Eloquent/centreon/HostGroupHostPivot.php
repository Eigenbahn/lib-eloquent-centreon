<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HostGroupHostPivot extends Pivot {
    protected $connection = 'centreon';
    protected $table = 'hostgroup_relation';

    public $timestamps = false;
    protected $primaryKey = 'hgr_id';
    protected $guarded = ['hgr_id'];
}