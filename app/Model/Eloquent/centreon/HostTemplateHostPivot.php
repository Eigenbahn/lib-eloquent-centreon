<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Model\Eloquent\centreon\HostTemplateHostPivot
 *
 * @property int $host_host_id
 * @property int $host_tpl_id
 * @property int|null $order
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot query()
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot whereHostHostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot whereHostTplId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HostTemplateHostPivot whereOrder($value)
 * @mixin \Eloquent
 */
class HostTemplateHostPivot extends Pivot {
    protected $connection = 'centreon';
    protected $table = 'host_template_relation';

    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}