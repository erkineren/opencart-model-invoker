<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse resize($filename, $width, $height)
 */
class AdminModelToolImage extends BaseModel
{
    const MODEL_NAME = 'tool/image';
    const IS_ADMIN = true;
}

