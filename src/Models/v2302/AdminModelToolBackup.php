<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse restore($sql)
 * @method ApiResponse getTables()
 * @method ApiResponse backup($tables)
 */
class AdminModelToolBackup extends BaseModel
{
    const MODEL_NAME = 'tool/backup';
    const IS_ADMIN = true;
}

