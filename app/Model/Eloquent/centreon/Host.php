<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\Host
 *
 * @property int $host_id
 * @property int $host_template_model_htm_id
 * @property int $command_command_id
 * @property string $command_command_id_arg1
 * @property int $timeperiod_tp_id
 * @property int $timeperiod_tp_id2
 * @property int $command_command_id2
 * @property string $command_command_id_arg2
 * @property string $host_name
 * @property string $host_alias
 * @property string $host_address
 * @property string $display_name
 * @property int $host_max_check_attempts
 * @property int $host_check_interval
 * @property int $host_retry_check_interval
 * @property string $host_active_checks_enabled
 * @property string $host_passive_checks_enabled
 * @property string $host_checks_enabled
 * @property string $initial_state
 * @property string $host_obsess_over_host
 * @property string $host_check_freshness
 * @property int $host_freshness_threshold
 * @property string $host_event_handler_enabled
 * @property int $host_low_flap_threshold
 * @property int $host_high_flap_threshold
 * @property string $host_flap_detection_enabled
 * @property string $flap_detection_options
 * @property string $host_process_perf_data
 * @property string $host_retain_status_information
 * @property string $host_retain_nonstatus_information
 * @property int $host_notification_interval
 * @property string $host_notification_options
 * @property string $host_notifications_enabled
 * @property bool $contact_additive_inheritance
 * @property bool $cg_additive_inheritance
 * @property int $host_first_notification_delay
 * @property string $host_stalking_options
 * @property string $host_snmp_community
 * @property string $host_snmp_version
 * @property int $host_location
 * @property string $host_comment
 * @property bool $host_locked
 * @property string $host_register
 * @property string $host_activate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\HostGroup[] $hostGroups
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereCgAdditiveInheritance($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereCommandCommandId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereCommandCommandId2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereCommandCommandIdArg1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereCommandCommandIdArg2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereContactAdditiveInheritance($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereFlapDetectionOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostActivate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostActiveChecksEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostCheckFreshness($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostChecksEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostFirstNotificationDelay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostFlapDetectionEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostFreshnessThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostHighFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostLocked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostLowFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostMaxCheckAttempts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostNotificationInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostNotificationOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostNotificationsEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostObsessOverHost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostPassiveChecksEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostProcessPerfData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostRegister($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostRetainNonstatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostRetainStatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostRetryCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostSnmpCommunity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostSnmpVersion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostStalkingOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereHostTemplateModelHtmId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereInitialState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereTimeperiodTpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Host whereTimeperiodTpId2($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Service[] $services
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Host[] $childTemplates
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\HostMacro[] $macros
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Host[] $parentTemplates
 * @property-read \App\Model\Eloquent\centreon\TimePeriod|null $checkTimePeriod
 * @property-read \App\Model\Eloquent\centreon\TimePeriod|null $notificationTimePeriod
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Host[] $pollers
 * @property int|null $host_recovery_notification_delay
 * @property int|null $host_acknowledgement_timeout
 * @property string|null $geo_coords
 * @property-read int|null $child_templates_count
 * @property-read int|null $host_groups_count
 * @property-read int|null $macros_count
 * @property-read int|null $parent_templates_count
 * @property-read int|null $pollers_count
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Host newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Host newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Host query()
 * @method static \Illuminate\Database\Eloquent\Builder|Host whereGeoCoords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Host whereHostAcknowledgementTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Host whereHostRecoveryNotificationDelay($value)
 */
class Host extends Model {
    protected $connection = 'centreon';
    protected $table = 'host';

    public $timestamps = false;
    protected $primaryKey = 'host_id';
    protected $guarded = ['host_id'];

    public function pollers () {
        return $this->belongsToMany(Poller::class, 'ns_host_relation', 'host_host_id', 'nagios_server_id');
    }

    //*
    public function parentTemplates () {
        return $this->belongsToMany(Host::class, 'host_template_relation', 'host_host_id', 'host_tpl_id')
            ->withPivot('order')
            ->using(HostTemplateHostPivot::class);
    }

    public function childTemplates () {
        return $this->belongsToMany(Host::class, 'host_template_relation', 'host_tpl_id', 'host_host_id')->using(HostTemplateHostPivot::class);
    }
    //*/

    public function hostGroups () {
        //return $this->belongsToMany(HostGroup::class)->using(HostGroupHostPivot::class);
        return $this->belongsToMany(HostGroup::class, 'hostgroup_relation', 'host_host_id', 'hostgroup_hg_id' )->using(HostGroupHostPivot::class);
    }

    public function services () {
        return $this->belongsToMany(Service::class, 'host_service_relation', 'host_host_id', 'service_service_id' );
    }

    public function macros () {
        return $this->hasMany(HostMacro::class, 'host_host_id');
    }

    public function checkTimePeriod () {
        return $this->belongsTo(TimePeriod::class, 'timeperiod_tp_id');
    }

    public function notificationTimePeriod () {
        return $this->belongsTo(TimePeriod::class, 'timeperiod_tp_id2');
    }
}