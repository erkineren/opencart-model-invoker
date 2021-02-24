<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_info, $order_ref, $transaction_date)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($fd_order_id, $type, $order_info = array())
 * @method ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method ApiResponse logger($message)
 * @method ApiResponse mapCurrency($code)
 * @method ApiResponse getStoredCards()
 * @method ApiResponse storeCard($token, $customer_id, $month, $year, $digits)
 * @method ApiResponse responseHash($total, $currency, $txn_date, $approval_code)
 * @method ApiResponse updateVoidStatus($order_id, $status)
 * @method ApiResponse updateCaptureStatus($order_id, $status)
 */
class ModelExtensionPaymentFirstdata extends BaseModel
{
    const MODEL_NAME = 'extension/payment/firstdata';
    
}

