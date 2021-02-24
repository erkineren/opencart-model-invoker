<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getOrderId($secure_token_id)
 * @method ApiResponse addOrder($order_id, $secure_token_id)
 * @method ApiResponse updateOrder($data)
 * @method ApiResponse call($data)
 * @method ApiResponse addTransaction($data)
 * @method ApiResponse log($message)
 */
class ModelExtensionPaymentPpPayflowIframe extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_payflow_iframe';
    
}

