<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addRefundRecord($order, $result)
 * @method ApiResponse capture($order_id, $capture_amount, $currency)
 * @method ApiResponse updateCaptureStatus($eway_order_id, $status)
 * @method ApiResponse updateTransactionId($eway_order_id, $transaction_id)
 * @method ApiResponse void($order_id)
 * @method ApiResponse updateVoidStatus($eway_order_id, $status)
 * @method ApiResponse refund($order_id, $refund_amount)
 * @method ApiResponse updateRefundStatus($eway_order_id, $status)
 * @method ApiResponse sendCurl($url, $data)
 * @method ApiResponse addTransaction($eway_order_id, $transactionid, $type, $total, $currency)
 * @method ApiResponse getTotalCaptured($eway_order_id)
 * @method ApiResponse getTotalRefunded($eway_order_id)
 */
class AdminModelExtensionPaymentEway extends BaseModel
{
    const MODEL_NAME = 'extension/payment/eway';
    
}

