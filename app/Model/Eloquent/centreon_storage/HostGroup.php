<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\HostGroup
 *
 * @mixin \Eloquent
 * @property int $hostgroup_id
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostGroup whereHostgroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostGroup whereName($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostGroup[] $hosts
 */
class HostGroup extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'hostgroups';

    public $timestamps = false;
    protected $primaryKey = 'hostgroup_id';
    protected $guarded = ['hostgroup_id'];

    public function hosts () {
        return $this->belongsToMany(Host::class, 'hosts_hostgroups', 'hostgroup_id', 'host_id' );
    }
}