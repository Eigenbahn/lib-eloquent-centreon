<?php

namespace App\Model\Eloquent\centreon_storage;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon_storage\Logs
 *
 * @property int $log_id
 * @property int|null $ctime
 * @property int|null $host_id
 * @property string|null $host_name
 * @property string $instance_name
 * @property int|null $issue_id
 * @property bool|null $msg_type
 * @property string|null $notification_cmd
 * @property string|null $notification_contact
 * @property string|null $output
 * @property int|null $retry
 * @property string|null $service_description
 * @property int|null $service_id
 * @property bool|null $status
 * @property int|null $type
 * @property-read \App\Model\Eloquent\centreon_storage\Host|null $host
 * @method static \Illuminate\Database\Eloquent\Builder|Logs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logs query()
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereCtime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereHostName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereInstanceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereIssueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereMsgType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereNotificationCmd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereNotificationContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereRetry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereServiceDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logs whereType($value)
 * @mixin \Eloquent
 */
class Logs extends Model {
    protected $connection = 'centreon_storage';
    protected $table = 'logs';

    public $timestamps = false;
    protected $primaryKey = 'log_id';
    public $incrementing = true;

    public function host () {
        return $this->belongsTo(Host::class, 'host_id');
    }

    /*
    // Lavarel does not support composite keys :(
    public function hostService () {
        return $this->hasOne(HostService::class, ['host_id', 'service_id'], ['host_id', 'service_id']);
    }
    */
}
