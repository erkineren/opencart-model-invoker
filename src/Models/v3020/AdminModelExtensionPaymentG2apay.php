<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getTotalReleased($g2apay_order_id)
 * @method ApiResponse refund($g2apay_order, $amount)
 * @method ApiResponse updateRefundStatus($g2apay_order_id, $status)
 * @method ApiResponse addTransaction($g2apay_order_id, $type, $total)
 * @method ApiResponse getTotalRefunded($g2apay_order_id)
 * @method ApiResponse sendCurl($url, $fields)
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentG2apay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/g2apay';
    
}

