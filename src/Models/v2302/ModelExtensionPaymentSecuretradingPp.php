<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse editOrder($order_id, $order)
 * @method ApiResponse addReference($order_id, $reference)
 * @method ApiResponse confirmOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method ApiResponse updateOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method ApiResponse getCountry($iso_code_2)
 * @method ApiResponse logger($message)
 */
class ModelExtensionPaymentSecuretradingPp extends BaseModel
{
    const MODEL_NAME = 'extension/payment/securetrading_pp';
    
}

