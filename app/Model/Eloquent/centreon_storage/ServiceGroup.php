<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\ServiceGroup
 *
 * @mixin \Eloquent
 * @property int $servicegroup_id
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\ServiceGroup whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\ServiceGroup whereServicegroupId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostService[] $hostServices
 * @property-read int|null $host_services_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup query()
 */
class ServiceGroup extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'servicegroups';

    public $timestamps = false;
    protected $primaryKey = 'servicegroup_id';
    protected $guarded = ['servicegroup_id'];

    public function hostServices () {
        return $this->belongsToMany(HostService::class, 'services_servicegroups', 'servicegroup_id', 'service_id');
    }
}