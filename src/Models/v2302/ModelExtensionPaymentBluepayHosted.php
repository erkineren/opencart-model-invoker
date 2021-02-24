<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_info, $response_data)
 * @method ApiResponse addTransaction($bluepay_hosted_order_id, $type, $order_info)
 * @method ApiResponse logger($message)
 */
class ModelExtensionPaymentBluepayHosted extends BaseModel
{
    const MODEL_NAME = 'extension/payment/bluepay_hosted';
    
}

