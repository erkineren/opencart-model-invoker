<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse capturePayment($data, $order_id)
 * @method ApiResponse call($xml)
 * @method ApiResponse addOrder($order_info, $capture_result)
 * @method ApiResponse addTransaction($firstdata_remote_order_id, $type, $order_info = array())
 * @method ApiResponse logger($message)
 * @method ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method ApiResponse mapCurrency($code)
 * @method ApiResponse getStoredCards()
 * @method ApiResponse storeCard($token, $customer_id, $type, $month, $year, $digits)
 */
class ModelExtensionPaymentFirstdataRemote extends BaseModel
{
    const MODEL_NAME = 'extension/payment/firstdata_remote';
    
}

