<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\IndexData
 *
 * @property int $id
 * @property string|null $host_name
 * @property int|null $host_id
 * @property string|null $service_description
 * @property int|null $service_id
 * @property int|null $check_interval
 * @property string|null $special
 * @property string|null $hidden
 * @property string|null $locked
 * @property string|null $trashed
 * @property string|null $must_be_rebuild
 * @property string|null $storage_type
 * @property int|null $to_delete
 * @property int|null $rrd_retention
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\Metric[] $metrics
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereCheckInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereHostName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereMustBeRebuild($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereRrdRetention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereServiceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereSpecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereStorageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereToDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\IndexData whereTrashed($value)
 * @mixin \Eloquent
 */
class IndexData extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'index_data';

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function metrics () {
        return $this->hasMany(Metric::class, 'index_id');
    }

    /*
    // Lavarel does not support composite keys :(
    public function service () {
        return $this->hasOne(HostService::class, ['host_id', 'service_id'], ['host_id', 'service_id']);
    }
    */
}