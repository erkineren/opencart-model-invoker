<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($bluepay_redirect_order_id, $status)
 * @method ApiResponse release($order_id, $amount)
 * @method ApiResponse updateReleaseStatus($bluepay_redirect_order_id, $status)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($bluepay_redirect_order_id, $status)
 * @method ApiResponse updateTransactionId($bluepay_redirect_order_id, $transaction_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($bluepay_redirect_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($bluepay_redirect_order_id)
 * @method ApiResponse getTotalRebated($bluepay_redirect_order_id)
 * @method ApiResponse sendCurl($url, $post_data)
 * @method ApiResponse callback()
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentBluepayRedirect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/bluepay_redirect';
    
}

