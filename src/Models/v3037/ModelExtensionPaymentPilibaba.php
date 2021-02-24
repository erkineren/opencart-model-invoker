<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getOrderTaxAmount($order_id)
 * @method ApiResponse addPilibabaOrder($response_data)
 * @method ApiResponse getConsumerInfo($order_id)
 * @method ApiResponse updateOrderInfo($data, $order_id)
 * @method ApiResponse log($data)
 */
class ModelExtensionPaymentPilibaba extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pilibaba';
    
}

