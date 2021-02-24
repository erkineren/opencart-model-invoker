<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getInstalled($type)
 * @method ApiResponse install($type, $code)
 * @method ApiResponse uninstall($type, $code)
 */
class AdminModelExtensionExtension extends BaseModel
{
    const MODEL_NAME = 'extension/extension';
    const IS_ADMIN = true;
}

