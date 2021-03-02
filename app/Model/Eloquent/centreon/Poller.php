<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\Poller
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $localhost
 * @property int|null $is_default
 * @property int|null $last_restart
 * @property string|null $ns_ip_address
 * @property string|null $ns_activate
 * @property string|null $ns_status
 * @property string|null $init_script
 * @property string|null $monitoring_engine
 * @property string|null $nagios_bin
 * @property string|null $nagiostats_bin
 * @property string|null $nagios_perfdata
 * @property string|null $centreonbroker_cfg_path
 * @property string|null $centreonbroker_module_path
 * @property string|null $centreonconnector_path
 * @property int|null $ssh_port
 * @property string|null $ssh_private_key
 * @property string|null $init_script_centreontrapd
 * @property string|null $snmp_trapd_path_conf
 * @property string|null $engine_name
 * @property string|null $engine_version
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Host[] $hosts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereCentreonbrokerCfgPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereCentreonbrokerModulePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereCentreonconnectorPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereEngineName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereEngineVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereInitScript($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereInitScriptCentreontrapd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereIsDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereLastRestart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereLocalhost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereMonitoringEngine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNagiosBin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNagiosPerfdata($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNagiostatsBin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNsActivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNsIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereNsStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereSnmpTrapdPathConf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereSshPort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Eloquent\centreon\Poller whereSshPrivateKey($value)
 * @mixin \Eloquent
 * @property string|null $engine_start_command
 * @property string|null $engine_stop_command
 * @property string|null $engine_restart_command
 * @property string|null $engine_reload_command
 * @property string|null $broker_reload_command
 * @property string $gorgone_communication_type
 * @property int|null $gorgone_port
 * @property string|null $centreonbroker_logs_path
 * @property int|null $remote_id
 * @property string $remote_server_use_as_proxy
 * @property string $updated
 * @property-read int|null $hosts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Poller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Poller query()
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereBrokerReloadCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereCentreonbrokerLogsPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereEngineReloadCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereEngineRestartCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereEngineStartCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereEngineStopCommand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereGorgoneCommunicationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereGorgonePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereRemoteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereRemoteServerUseAsProxy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Poller whereUpdated($value)
 */
class Poller extends Model {
    protected $connection = 'centreon';
    protected $table = 'nagios_server';

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function hosts () {
        return $this->belongsToMany(Host::class, 'ns_host_relation', 'nagios_server_id', 'host_host_id' );
    }
}