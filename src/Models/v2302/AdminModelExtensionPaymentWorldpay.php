<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse refund($order_id, $amount)
 * @method ApiResponse updateRefundStatus($worldpay_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($worldpay_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($worldpay_order_id)
 * @method ApiResponse getTotalRefunded($worldpay_order_id)
 * @method ApiResponse sendCurl($url, $order)
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentWorldpay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/worldpay';
    const IS_ADMIN = true;
}

