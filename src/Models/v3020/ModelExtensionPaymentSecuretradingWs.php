<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse call($data)
 * @method ApiResponse format($number, $currency, $value = '', $format = false)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addMd($order_id, $md)
 * @method ApiResponse removeMd($md)
 * @method ApiResponse updateReference($order_id, $transaction_reference)
 * @method ApiResponse getOrderId($md)
 * @method ApiResponse confirmOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method ApiResponse updateOrder($order_id, $order_status_id, $comment = '', $notify = false)
 * @method ApiResponse logger($message)
 */
class ModelExtensionPaymentSecuretradingWs extends BaseModel
{
    const MODEL_NAME = 'extension/payment/securetrading_ws';
    
}

