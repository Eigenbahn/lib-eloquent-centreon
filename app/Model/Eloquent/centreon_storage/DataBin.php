<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\DataBin
 *
 * @property int|null $id_metric
 * @property int|null $ctime
 * @property float|null $value
 * @property string|null $status
 * @property-read \App\Model\Eloquent\centreon_storage\Metric|null $metric
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\DataBin whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\DataBin whereIdMetric($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\DataBin whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon_storage\DataBin whereValue($value)
 * @mixin \Eloquent
 */
class DataBin extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'data_bin';

    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;

    public function metric () {
        return $this->belongsTo(Metric::class, 'id_metric');
    }
}