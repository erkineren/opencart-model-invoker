<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addOrderHistory($order_id, $data, $store_id = 0)
 */
class AdminModelExtensionFraudFraudlabspro extends BaseModel
{
    const MODEL_NAME = 'extension/fraud/fraudlabspro';
    
}

