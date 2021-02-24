<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse login($username, $key)
 * @method ApiResponse addApiSession($api_id, $session_id, $ip)
 * @method ApiResponse getApiIps($api_id)
 */
class ModelAccountApi extends BaseModel
{
    const MODEL_NAME = 'account/api';
    
}

