<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($sagepay_server_order_id, $status)
 * @method ApiResponse release($order_id, $amount)
 * @method ApiResponse updateReleaseStatus($sagepay_server_order_id, $status)
 * @method ApiResponse updateForRebate($sagepay_server_order_id, $order_ref)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($sagepay_server_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($sagepay_server_order_id)
 * @method ApiResponse getTotalRebated($sagepay_server_order_id)
 * @method ApiResponse sendCurl($url, $payment_data)
 * @method ApiResponse logger($title, $data)
 */
class AdminModelExtensionPaymentSagepayServer extends BaseModel
{
    const MODEL_NAME = 'extension/payment/sagepay_server';
    
}

