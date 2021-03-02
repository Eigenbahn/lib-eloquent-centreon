<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\Host
 *
 * @mixin \Eloquent
 * @property int $host_id
 * @property string $name
 * @property int $instance_id
 * @property bool $acknowledged
 * @property int $acknowledgement_type
 * @property string $action_url
 * @property bool $active_checks
 * @property string $address
 * @property string $alias
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
 * @property float $first_notification_delay
 * @property bool $flap_detection
 * @property bool $flap_detection_on_down
 * @property bool $flap_detection_on_unreachable
 * @property bool $flap_detection_on_up
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
 * @property int $last_time_down
 * @property int $last_time_unreachable
 * @property int $last_time_up
 * @property int $last_update
 * @property float $latency
 * @property float $low_flap_threshold
 * @property int $max_check_attempts
 * @property int $modified_attributes
 * @property int $next_check
 * @property int $next_host_notification
 * @property bool $no_more_notifications
 * @property string $notes
 * @property string $notes_url
 * @property float $notification_interval
 * @property int $notification_number
 * @property string $notification_period
 * @property bool $notify
 * @property bool $notify_on_down
 * @property bool $notify_on_downtime
 * @property bool $notify_on_flapping
 * @property bool $notify_on_recovery
 * @property bool $notify_on_unreachable
 * @property bool $obsess_over_host
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
 * @property bool $stalk_on_down
 * @property bool $stalk_on_unreachable
 * @property bool $stalk_on_up
 * @property int $state
 * @property int $state_type
 * @property string $statusmap_image
 * @property int $real_state
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereAcknowledged($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereAcknowledgementType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereActionUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereActiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckAttempt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckCommand($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckFreshness($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckPeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCheckType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereChecked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereCommandLine($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultActiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultFailurePrediction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultFlapDetection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultNotify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultPassiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDefaultProcessPerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereEventHandler($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereEventHandlerEnabled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereExecutionTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFailurePrediction($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFirstNotificationDelay($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFlapDetection($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFlapDetectionOnDown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFlapDetectionOnUnreachable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFlapDetectionOnUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFlapping($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereFreshnessThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereHighFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereHostId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereIconImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereIconImageAlt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereInstanceId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastCheck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastHardState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastHardStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastNotification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastTimeDown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastTimeUnreachable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastTimeUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLastUpdate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLatency($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereLowFlapThreshold($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereMaxCheckAttempts($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereModifiedAttributes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNextCheck($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNextHostNotification($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNoMoreNotifications($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotesUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotificationInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotificationNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotificationPeriod($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotify($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotifyOnDown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotifyOnDowntime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotifyOnFlapping($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotifyOnRecovery($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereNotifyOnUnreachable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereObsessOverHost($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereOutput($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host wherePassiveChecks($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host wherePercentStateChange($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host wherePerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereProcessPerfdata($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereRealState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereRetainNonstatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereRetainStatusInformation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereRetryInterval($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereScheduledDowntimeDepth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereShouldBeScheduled($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereStalkOnDown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereStalkOnUnreachable($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereStalkOnUp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereState($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereStateType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon_storage\Host whereStatusmapImage($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostGroup[] $hostGroups
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon_storage\HostService[] $hostServices
 * @property string|null $timezone
 * @property-read int|null $host_groups_count
 * @property-read int|null $host_services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Host newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Host newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Host query()
 * @method static \Illuminate\Database\Eloquent\Builder|Host whereTimezone($value)
 */
class Host extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'hosts';

    public $timestamps = false;
    protected $primaryKey = 'host_id';
    protected $guarded = ['host_id'];

    public function hostGroups () {
        return $this->belongsToMany(HostGroup::class, 'hosts_hostgroups', 'host_id', 'hostgroup_id');
    }

    public function hostServices () {
        return $this->belongsToMany(HostService::class, 'services_servicegroups', 'host_id', 'service_id');
    }
}