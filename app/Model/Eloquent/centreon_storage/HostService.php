<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\HostService
 *
 * @mixin \Eloquent
 * @property int $host_id
 * @property string $description
 * @property int $service_id
 * @property bool $acknowledged
 * @property int $acknowledgement_type
 * @property string $action_url
 * @property bool $active_checks
 * @property int $check_attempt
 * @property string $check_command
 * @property bool $check_freshness
 * @property float $check_interval
 * @property string $check_period
 * @property int $check_type
 * @property bool $checked
 * @property string $command_line
 * @property bool $default_active_checks
 * @property bool $default_event_handler_enabled
 * @property bool $default_failure_prediction
 * @property bool $default_flap_detection
 * @property bool $default_notify
 * @property bool $default_passive_checks
 * @property bool $default_process_perfdata
 * @property string $display_name
 * @property bool $enabled
 * @property string $event_handler
 * @property bool $event_handler_enabled
 * @property float $execution_time
 * @property bool $failure_prediction
 * @property string $failure_prediction_options
 * @property float $first_notification_delay
 * @property bool $flap_detection
 * @property bool $flap_detection_on_critical
 * @property bool $flap_detection_on_ok
 * @property bool $flap_detection_on_unknown
 * @property bool $flap_detection_on_warning
 * @property bool $flapping
 * @property float $freshness_threshold
 * @property float $high_flap_threshold
 * @property string $icon_image
 * @property string $icon_image_alt
 * @property int $last_check
 * @property int $last_hard_state
 * @property int $last_hard_state_change
 * @property int $last_notification
 * @property int $last_state_change
 * @property int $last_time_critical
 * @property int $last_time_ok
 * @property int $last_time_unknown
 * @property int $last_time_warning
 * @property int $last_update
 * @property float $latency
 * @property float $low_flap_threshold
 * @property int $max_check_attempts
 * @property int $modified_attributes
 * @property int $next_check
 * @property int $next_notification
 * @property bool $no_more_notifications
 * @property string $notes
 * @property string $notes_url
 * @property float $notification_interval
 * @property int $notification_number
 * @property string $notification_period
 * @property bool $notify
 * @property bool $notify_on_critical
 * @property bool $notify_on_downtime
 * @property bool $notify_on_flapping
 * @property bool $notify_on_recovery
 * @property bool $notify_on_unknown
 * @property bool $notify_on_warning
 * @property bool $obsess_over_service
 * @property string $output
 * @property bool $passive_checks
 * @property float $percent_state_change
 * @property string $perfdata
 * @property bool $process_perfdata
 * @property bool $retain_nonstatus_information
 * @property bool $retain_status_information
 * @property float $retry_interval
 * @property int $scheduled_downtime_depth
 * @property bool $should_be_scheduled
 * @property bool $stalk_on_critical
 * @property bool $stalk_on_ok
 * @property bool $stalk_on_unknown
 * @property bool $stalk_on_warning
 * @property int $state
 * @property int $state_type
 * @property bool $volatile
 * @property int $real_state
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereAcknowledged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereAcknowledgementType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereActionUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereActiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckAttempt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckCommand($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckFreshness($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckPeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCheckType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereChecked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereCommandLine($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultActiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultFailurePrediction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultFlapDetection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultNotify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultPassiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDefaultProcessPerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereEventHandler($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereExecutionTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFailurePrediction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFailurePredictionOptions($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFirstNotificationDelay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapDetection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapDetectionOnCritical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapDetectionOnOk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapDetectionOnUnknown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapDetectionOnWarning($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFlapping($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereFreshnessThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereHighFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereHostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereIconImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereIconImageAlt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastCheck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastHardState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastHardStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastNotification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastTimeCritical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastTimeOk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastTimeUnknown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastTimeWarning($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLastUpdate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLatency($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereLowFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereMaxCheckAttempts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereModifiedAttributes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNextCheck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNextNotification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNoMoreNotifications($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotesUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotificationInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotificationNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotificationPeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnCritical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnDowntime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnFlapping($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnRecovery($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnUnknown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereNotifyOnWarning($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereObsessOverService($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereOutput($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService wherePassiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService wherePercentStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService wherePerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereProcessPerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereRealState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereRetainNonstatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereRetainStatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereRetryInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereScheduledDowntimeDepth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereServiceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereShouldBeScheduled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereStalkOnCritical($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereStalkOnOk($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereStalkOnUnknown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereStalkOnWarning($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereStateType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\HostService whereVolatile($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostService[] $hosts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostService[] $serviceGroups
 * @property-read \App\Model\Eloquent\centreon_storage\Host $host
 */
class HostService extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'services';

    public $timestamps = false;
    // NB: this is an oversimplification
    // we in fact have a composite key [host_id, service_id], but this is sadly not supported natively by eloquent
    // it is sufficient, though, for our servicegroup association checks
    protected $primaryKey = 'service_id';
    protected $guarded = ['service_id'];

    public function serviceGroups () {
        return $this->belongsToMany(ServiceGroup::class, 'services_servicegroups', 'service_id', 'servicegroup_id');
    }

    public function host () {
        return $this->belongsTo(Host::class, 'host_id');
    }
}