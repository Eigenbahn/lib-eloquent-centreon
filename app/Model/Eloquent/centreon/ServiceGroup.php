<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\ServiceGroup
 *
 * @property int $sg_id
 * @property string $sg_name
 * @property string $sg_alias
 * @property string $sg_comment
 * @property string $sg_activate
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\ServiceGroup whereSgActivate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\ServiceGroup whereSgAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\ServiceGroup whereSgComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\ServiceGroup whereSgId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\ServiceGroup whereSgName($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Eloquent\centreon\Service[] $services
 * @property string|null $geo_coords
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceGroup whereGeoCoords($value)
 */
class ServiceGroup extends Model {
    protected $connection = 'centreon';
    protected $table = 'servicegroup';

    public $timestamps = false;
    protected $primaryKey = 'sg_id';
    protected $guarded = ['sg_id'];

    public function services () {
        return $this->belongsToMany(Service::class, 'servicegroup_relation', 'servicegroup_sg_id', 'service_service_id');
    }
}