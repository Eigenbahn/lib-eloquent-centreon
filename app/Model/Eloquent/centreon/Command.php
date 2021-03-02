<?php

namespace App\Model\Eloquent\centreon;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Eloquent\centreon\Command
 *
 * @property int $command_id
 * @property int $connector_id
 * @property string $command_name
 * @property string $command_line
 * @property string $command_example
 * @property bool $command_type
 * @property int $enable_shell
 * @property string $command_comment
 * @property int $graph_id
 * @property int $cmd_cat_id
 * @property bool $command_locked
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCmdCatId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandComment($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandExample($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandLine($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandLocked($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereCommandType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereConnectorId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereEnableShell($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Eloquent\centreon\Command whereGraphId($value)
 * @mixin \Eloquent
 * @property string|null $command_activate
 * @method static \Illuminate\Database\Eloquent\Builder|Command newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Command newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Command query()
 * @method static \Illuminate\Database\Eloquent\Builder|Command whereCommandActivate($value)
 */
class Command extends Model {
    protected $connection = 'centreon';
    protected $table = 'command';

    public $timestamps = false;
    protected $primaryKey = 'command_id';
    protected $guarded = ['command_id'];
}