<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTables()
 * @method ApiResponse backup($tables)
 */
class AdminModelToolBackup extends BaseModel
{
    const MODEL_NAME = 'tool/backup';
    
}

