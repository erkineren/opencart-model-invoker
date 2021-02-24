<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($bluepay_hosted_order_id, $status)
 * @method ApiResponse release($order_id, $amount)
 * @method ApiResponse updateReleaseStatus($bluepay_hosted_order_id, $status)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($bluepay_hosted_order_id, $status)
 * @method ApiResponse updateTransactionId($bluepay_hosted_order_id, $transaction_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($bluepay_hosted_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($bluepay_hosted_order_id)
 * @method ApiResponse getTotalRebated($bluepay_hosted_order_id)
 * @method ApiResponse sendCurl($url, $post_data)
 * @method ApiResponse adminCallback()
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentBluepayHosted extends BaseModel
{
    const MODEL_NAME = 'extension/payment/bluepay_hosted';
    const IS_ADMIN = true;
}

