<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\HostGroup
 *
 * @property int $hg_id
 * @property string $hg_name
 * @property string $hg_alias
 * @property string $hg_notes
 * @property string $hg_notes_url
 * @property string $hg_action_url
 * @property int $hg_icon_image
 * @property int $hg_map_icon_image
 * @property int $hg_rrd_retention
 * @property string $hg_comment
 * @property string $hg_activate
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Host[] $hosts
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgActionUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgActivate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgIconImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgMapIconImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgNotes($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgNotesUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\HostGroup whereHgRrdRetention($value)
 * @mixin \Eloquent
 * @property string|null $geo_coords
 * @property-read int|null $hosts_count
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|HostGroup whereGeoCoords($value)
 */
class HostGroup extends Model {
    protected $connection = 'centreon';
    protected $table = 'hostgroup';

    public $timestamps = false;
    protected $primaryKey = 'hg_id';
    protected $guarded = ['hg_id'];

    public function hosts () {
        //return $this->belongsToMany(HostGroup::class)->using(HostGroupHostPivot::class);
        return $this->belongsToMany(Host::class, 'hostgroup_relation', 'hostgroup_hg_id', 'host_host_id')->using(HostGroupHostPivot::class);
    }
}