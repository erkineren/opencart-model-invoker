<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getApiByKey($key)
 * @method ApiResponse addApiSession($api_id, $session_id, $ip)
 * @method ApiResponse getApiIps($api_id)
 */
class ModelAccountApi extends BaseModel
{
    const MODEL_NAME = 'account/api';
    
}

