<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\TimePeriod
 *
 * @property int $tp_id
 * @property string $tp_name
 * @property string $tp_alias
 * @property string $tp_sunday
 * @property string $tp_monday
 * @property string $tp_tuesday
 * @property string $tp_wednesday
 * @property string $tp_thursday
 * @property string $tp_friday
 * @property string $tp_saturday
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpFriday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpMonday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpSaturday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpSunday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpThursday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpTuesday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\TimePeriod whereTpWednesday($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|TimePeriod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimePeriod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TimePeriod query()
 */
class TimePeriod extends Model
{
    protected $connection = 'centreon';
    protected $table = 'timeperiod';

    public $timestamps = false;
    protected $primaryKey = 'tp_id';
    protected $guarded = ['tp_id'];
}