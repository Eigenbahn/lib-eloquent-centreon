<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Model\Eloquent\centreon\ServiceMacro
 *
 * @property int $svc_macro_id
 * @property string $svc_macro_name
 * @property string|null $svc_macro_value
 * @property bool|null $is_password
 * @property string|null $description
 * @property int $svc_svc_id
 * @property int|null $macro_order
 * @property-read \App\Model\Eloquent\centreon\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereIsPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereMacroOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereSvcMacroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereSvcMacroName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereSvcMacroValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\ServiceMacro whereSvcSvcId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceMacro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceMacro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceMacro query()
 */
class ServiceMacro extends Model {
    protected $connection = 'centreon';
    protected $table = 'on_demand_macro_service';

    public $timestamps = false;
    protected $primaryKey = 'svc_macro_id';
    protected $guarded = ['svc_macro_id'];

    public function service () {
        return $this->belongsTo(Service::class, 'svc_svc_id');
    }
}