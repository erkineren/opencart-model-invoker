<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse checkEnrollment($account, $amount, $currency, $order_ref)
 * @method ApiResponse enrollmentSignature($account, $amount, $currency, $order_ref, $card_number, $card_expire, $card_type, $card_name, $pares)
 * @method ApiResponse capturePayment($account, $amount, $currency, $order_id, $order_ref, $card_number, $expire, $name, $type, $cvv, $issue, $eci_ref, $eci = '', $cavv = '', $xid = '')
 * @method ApiResponse addOrder($order_info, $response, $account, $order_ref)
 * @method ApiResponse addTransaction($globalpay_remote_order_id, $type, $order_info)
 * @method ApiResponse logger($message)
 * @method ApiResponse addHistory($order_id, $order_status_id, $comment)
 */
class ModelExtensionPaymentGlobalpayRemote extends BaseModel
{
    const MODEL_NAME = 'extension/payment/globalpay_remote';
    
}

