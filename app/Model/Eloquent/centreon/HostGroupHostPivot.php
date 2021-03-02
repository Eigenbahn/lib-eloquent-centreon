<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Model\Eloquent\centreon\HostGroupHostPivot
 *
 * @property int $hgr_id
 * @property int|null $hostgroup_hg_id
 * @property int|null $host_host_id
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot query()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot whereHgrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot whereHostHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroupHostPivot whereHostgroupHgId($value)
 * @mixin \Eloquent
 */
class HostGroupHostPivot extends Pivot {
    protected $connection = 'centreon';
    protected $table = 'hostgroup_relation';

    public $timestamps = false;
    protected $primaryKey = 'hgr_id';
    protected $guarded = ['hgr_id'];
}