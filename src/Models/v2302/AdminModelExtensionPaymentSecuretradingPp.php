<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($securetrading_pp_order_id, $status)
 * @method ApiResponse release($order_id, $amount)
 * @method ApiResponse updateReleaseStatus($securetrading_pp_order_id, $status)
 * @method ApiResponse updateForRebate($securetrading_pp_order_id, $order_ref)
 * @method ApiResponse rebate($order_id, $refunded_amount)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($securetrading_pp_order_id, $type, $total)
 * @method ApiResponse getTotalReleased($securetrading_pp_order_id)
 * @method ApiResponse getTotalRebated($securetrading_pp_order_id)
 * @method ApiResponse increaseRefundedAmount($order_id, $amount)
 * @method ApiResponse call($data)
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentSecuretradingPp extends BaseModel
{
    const MODEL_NAME = 'extension/payment/securetrading_pp';
    const IS_ADMIN = true;
}

