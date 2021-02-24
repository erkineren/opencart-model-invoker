<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($globalpay_remote_order_id, $status)
 * @method ApiResponse capture($order_id, $amount)
 * @method ApiResponse updateCaptureStatus($globalpay_remote_order_id, $status)
 * @method ApiResponse updateForRebate($globalpay_remote_order_id, $pas_ref, $order_ref)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($globalpay_remote_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($globalpay_remote_order_id, $type, $total)
 * @method ApiResponse logger($message)
 * @method ApiResponse getTotalCaptured($globalpay_order_id)
 * @method ApiResponse getTotalRebated($globalpay_order_id)
 */
class AdminModelExtensionPaymentGlobalpayRemote extends BaseModel
{
    const MODEL_NAME = 'extension/payment/globalpay_remote';
    const IS_ADMIN = true;
}

