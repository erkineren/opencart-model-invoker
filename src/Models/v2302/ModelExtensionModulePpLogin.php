<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTokens($code)
 * @method ApiResponse getUserInfo($access_token)
 * @method ApiResponse log($data, $class_step = 6)
 */
class ModelExtensionModulePpLogin extends BaseModel
{
    const MODEL_NAME = 'extension/module/pp_login';
    
}

