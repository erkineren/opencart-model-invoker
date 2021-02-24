<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($realex_remote_order_id, $status)
 * @method ApiResponse capture($order_id, $amount)
 * @method ApiResponse updateCaptureStatus($realex_remote_order_id, $status)
 * @method ApiResponse updateForRebate($realex_remote_order_id, $pas_ref, $order_ref)
 * @method ApiResponse rebate($order_id, $amount)
 * @method ApiResponse updateRebateStatus($realex_remote_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($realex_remote_order_id, $type, $total)
 * @method ApiResponse logger($message)
 * @method ApiResponse getTotalCaptured($realex_order_id)
 * @method ApiResponse getTotalRebated($realex_order_id)
 */
class AdminModelExtensionPaymentRealexRemote extends BaseModel
{
    const MODEL_NAME = 'extension/payment/realex_remote';
    
}

