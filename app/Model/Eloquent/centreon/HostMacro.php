<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\HostMacro
 *
 * @property int $host_macro_id
 * @property string $host_macro_name
 * @property string|null $host_macro_value
 * @property bool|null $is_password
 * @property string|null $description
 * @property int $host_host_id
 * @property int|null $macro_order
 * @property-read \App\Model\Eloquent\centreon\Host $host
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereHostHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereHostMacroId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereHostMacroName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereHostMacroValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereIsPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\HostMacro whereMacroOrder($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|HostMacro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostMacro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostMacro query()
 */
class HostMacro extends Model {
    protected $connection = 'centreon';
    protected $table = 'on_demand_macro_host';

    public $timestamps = false;
    protected $primaryKey = 'host_macro_id';
    protected $guarded = ['host_macro_id'];

    public function host () {
        return $this->belongsTo(Host::class, 'host_host_id');
    }
}