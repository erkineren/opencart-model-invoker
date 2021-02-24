<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse addIp($ip)
 * @method ApiResponse removeIp($ip)
 * @method ApiResponse getIps($start = 0, $limit = 10)
 * @method ApiResponse getTotalIps()
 * @method ApiResponse getTotalIpsByIp($ip)
 */
class AdminModelExtensionFraudIp extends BaseModel
{
    const MODEL_NAME = 'extension/fraud/ip';
    const IS_ADMIN = true;
}

