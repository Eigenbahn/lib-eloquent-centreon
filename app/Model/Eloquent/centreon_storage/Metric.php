<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\Metric
 *
 * @property int $metric_id
 * @property int|null $index_id
 * @property string|null $metric_name
 * @property string|null $data_source_type
 * @property string|null $unit_name
 * @property float|null $current_value
 * @property float|null $warn
 * @property float|null $warn_low
 * @property bool|null $warn_threshold_mode
 * @property float|null $crit
 * @property float|null $crit_low
 * @property bool|null $crit_threshold_mode
 * @property string|null $hidden
 * @property float|null $min
 * @property float|null $max
 * @property string|null $locked
 * @property int|null $to_delete
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\DataBin[] $dataBins
 * @property-read \App\Model\Eloquent\centreon_storage\IndexData|null $indexData
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereCrit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereCritLow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereCritThresholdMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereCurrentValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereDataSourceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereHidden($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereIndexId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereMetricId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereMetricName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereToDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereUnitName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereWarn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereWarnLow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\Metric whereWarnThresholdMode($value)
 * @mixin \Eloquent
 * @property-read int|null $data_bins_count
 * @method static \Illuminate\Database\Eloquent\Builder|Metric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Metric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Metric query()
 */
class Metric extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'metrics';

    public $timestamps = false;
    protected $primaryKey = 'metric_id';
    protected $guarded = ['metric_id'];

    public function indexData () {
        return $this->belongsTo(IndexData::class, 'index_id');
    }

    public function dataBins () {
        return $this->hasMany(DataBin::class, 'id_metric');
    }

    /*
    // Lavarel does not support composite keys :(
    public function service () {
        return $this->hasOne(HostService::class, ['host_id', 'service_id'], ['host_id', 'service_id']);
    }
    */
}