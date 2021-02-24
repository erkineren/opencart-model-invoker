<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse call($xml)
 * @method ApiResponse void($order_ref, $tdate)
 * @method ApiResponse updateVoidStatus($firstdata_remote_order_id, $status)
 * @method ApiResponse capture($order_ref, $total, $currency_code)
 * @method ApiResponse updateCaptureStatus($firstdata_remote_order_id, $status)
 * @method ApiResponse refund($order_ref, $total, $currency_code)
 * @method ApiResponse updateRefundStatus($firstdata_remote_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($firstdata_remote_order_id, $type, $total)
 * @method ApiResponse logger($message)
 * @method ApiResponse getTotalCaptured($firstdata_order_id)
 * @method ApiResponse getTotalRefunded($firstdata_order_id)
 * @method ApiResponse mapCurrency($code)
 */
class AdminModelExtensionPaymentFirstdataRemote extends BaseModel
{
    const MODEL_NAME = 'extension/payment/firstdata_remote';
    
}

