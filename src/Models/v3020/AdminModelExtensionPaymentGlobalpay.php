<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($globalpay_order_id, $status)
 * @method ApiResponse capture($order_id, $amount)
 * @method ApiResponse updateCaptureStatus($globalpay_order_id, $status)
 * @method ApiResponse updateForRebate($globalpay_order_id, $pas_ref, $order_ref)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($globalpay_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($globalpay_order_id, $type, $total)
 * @method ApiResponse logger($message)
 * @method ApiResponse getTotalCaptured($globalpay_order_id)
 * @method ApiResponse getTotalRebated($globalpay_order_id)
 */
class AdminModelExtensionPaymentGlobalpay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/globalpay';
    const IS_ADMIN = true;
}

