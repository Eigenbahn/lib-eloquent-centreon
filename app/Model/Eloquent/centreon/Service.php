<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\HostService
 *
 * @property int $service_id
 * @property int $service_template_model_stm_id
 * @property int $command_command_id
 * @property int $timeperiod_tp_id
 * @property int $command_command_id2
 * @property int $timeperiod_tp_id2
 * @property string $service_description
 * @property string $service_alias
 * @property string $display_name
 * @property string $service_is_volatile
 * @property int $service_max_check_attempts
 * @property int $service_normal_check_interval
 * @property int $service_retry_check_interval
 * @property string $service_active_checks_enabled
 * @property string $service_passive_checks_enabled
 * @property string $initial_state
 * @property string $service_parallelize_check
 * @property string $service_obsess_over_service
 * @property string $service_check_freshness
 * @property int $service_freshness_threshold
 * @property string $service_event_handler_enabled
 * @property int $service_low_flap_threshold
 * @property int $service_high_flap_threshold
 * @property string $service_flap_detection_enabled
 * @property string $service_process_perf_data
 * @property string $service_retain_status_information
 * @property string $service_retain_nonstatus_information
 * @property int $service_notification_interval
 * @property string $service_notification_options
 * @property string $service_notifications_enabled
 * @property bool $contact_additive_inheritance
 * @property bool $cg_additive_inheritance
 * @property string $service_inherit_contacts_from_host
 * @property int $service_first_notification_delay
 * @property string $service_stalking_options
 * @property string $service_comment
 * @property string $command_command_id_arg
 * @property string $command_command_id_arg2
 * @property bool $service_locked
 * @property string $service_register
 * @property string $service_activate
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereCgAdditiveInheritance($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereCommandCommandId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereCommandCommandId2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereCommandCommandIdArg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereCommandCommandIdArg2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereContactAdditiveInheritance($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereInitialState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceActivate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceActiveChecksEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceCheckFreshness($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceFirstNotificationDelay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceFlapDetectionEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceFreshnessThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceHighFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceInheritContactsFromHost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceIsVolatile($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceLocked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceLowFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceMaxCheckAttempts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceNormalCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceNotificationInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceNotificationOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceNotificationsEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceObsessOverService($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceParallelizeCheck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServicePassiveChecksEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceProcessPerfData($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceRegister($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceRetainNonstatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceRetainStatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceRetryCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceStalkingOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereServiceTemplateModelStmId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereTimeperiodTpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Service whereTimeperiodTpId2($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Service[] $childTemplates
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Service[] $hosts
 * @property-read \App\Model\Eloquent\centreon\Service $parentTemplate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\ServiceGroup[] $serviceGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\ServiceMacro[] $macros
 * @property-read \App\Model\Eloquent\centreon\TimePeriod|null $checkTimePeriod
 * @property-read \App\Model\Eloquent\centreon\TimePeriod|null $notificationTimePeriod
 * @property int|null $service_recovery_notification_delay
 * @property string|null $service_use_only_contacts_from_host
 * @property int|null $service_acknowledgement_timeout
 * @property string|null $geo_coords
 * @property-read int|null $child_templates_count
 * @property-read int|null $hosts_count
 * @property-read int|null $macros_count
 * @property-read int|null $service_groups_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereGeoCoords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceAcknowledgementTimeout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceRecoveryNotificationDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceUseOnlyContactsFromHost($value)
 */
class Service extends Model {
    protected $connection = 'centreon';
    protected $table = 'service';

    public $timestamps = false;
    protected $primaryKey = 'service_id';
    protected $guarded = ['service_id'];

    public function parentTemplate () {
        return $this->belongsTo(Service::class, 'service_template_model_stm_id');
    }

    public function childTemplates () {
        return $this->hasMany(Service::class, 'service_template_model_stm_id');
    }

    public function serviceGroups () {
        return $this->belongsToMany(ServiceGroup::class, 'servicegroup_relation', 'service_service_id', 'servicegroup_sg_id');
    }

    public function hosts () {
        return $this->belongsToMany(Host::class, 'host_service_relation', 'service_service_id', 'host_host_id' );
    }

    public function macros () {
        return $this->hasMany(ServiceMacro::class, 'svc_svc_id');
    }

    public function checkTimePeriod () {
        return $this->belongsTo(TimePeriod::class, 'timeperiod_tp_id');
    }

    public function notificationTimePeriod () {
        return $this->belongsTo(TimePeriod::class, 'timeperiod_tp_id2');
    }
}