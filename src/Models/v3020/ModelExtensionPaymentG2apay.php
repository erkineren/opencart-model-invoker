<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addG2aOrder($order_info)
 * @method ApiResponse updateOrder($g2apay_order_id, $g2apay_transaction_id, $type, $order_info)
 * @method ApiResponse addTransaction($g2apay_order_id, $type, $order_info)
 * @method ApiResponse getG2aOrder($order_id)
 * @method ApiResponse sendCurl($url, $fields)
 * @method ApiResponse logger($message)
 */
class ModelExtensionPaymentG2apay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/g2apay';
    
}

