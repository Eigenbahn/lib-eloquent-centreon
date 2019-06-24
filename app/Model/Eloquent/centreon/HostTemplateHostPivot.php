<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Relations\Pivot;

class HostTemplateHostPivot extends Pivot {
    protected $connection = 'centreon';
    protected $table = 'host_template_relation';

    public $timestamps = false;
    protected $primaryKey = null;
    public $incrementing = false;
}