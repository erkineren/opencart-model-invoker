<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($sagepay_direct_order_id, $status)
 * @method ApiResponse release($order_id, $amount)
 * @method ApiResponse updateReleaseStatus($sagepay_direct_order_id, $status)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($sagepay_direct_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($sagepay_direct_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($sagepay_direct_order_id)
 * @method ApiResponse getTotalRebated($sagepay_direct_order_id)
 * @method ApiResponse sendCurl($url, $payment_data)
 * @method ApiResponse logger($title, $data)
 */
class AdminModelExtensionPaymentSagepayDirect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/sagepay_direct';
    const IS_ADMIN = true;
}

