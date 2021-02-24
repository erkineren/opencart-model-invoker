<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addApi($data)
 * @method ApiResponse editApi($api_id, $data)
 * @method ApiResponse deleteApi($api_id)
 * @method ApiResponse getApi($api_id)
 * @method ApiResponse getApis($data = array())
 * @method ApiResponse getTotalApis()
 * @method ApiResponse addApiIp($api_id, $ip)
 * @method ApiResponse getApiIps($api_id)
 * @method ApiResponse addApiSession($api_id, $session_id, $ip)
 * @method ApiResponse getApiSessions($api_id)
 * @method ApiResponse deleteApiSession($api_session_id)
 * @method ApiResponse deleteApiSessionBySessonId($session_id)
 */
class AdminModelUserApi extends BaseModel
{
    const MODEL_NAME = 'user/api';
    
}

