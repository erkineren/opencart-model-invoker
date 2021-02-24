<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse getCard($card_id, $token)
 * @method ApiResponse addCard($data)
 * @method ApiResponse deleteCard($card_id)
 * @method ApiResponse addOrder($order_info)
 * @method ApiResponse getOrder($order_id, $vpstx_id = null)
 * @method ApiResponse updateOrder($order_info, $vps_txn_id, $tx_auth_no)
 * @method ApiResponse deleteOrder($order_id)
 * @method ApiResponse addTransaction($sagepay_server_order_id, $type, $order_info)
 * @method ApiResponse getRecurringOrders($order_id)
 * @method ApiResponse addRecurringPayment($item, $vendor_tx_code)
 * @method ApiResponse updateRecurringPayment($item, $order_details)
 * @method ApiResponse cronPayment()
 * @method ApiResponse updateCronJobRunTime()
 * @method ApiResponse sendCurl($url, $payment_data, $i = null)
 * @method ApiResponse logger($title, $data)
 * @method ApiResponse recurringPayments()
 */
class ModelExtensionPaymentSagepayServer extends BaseModel
{
    const MODEL_NAME = 'extension/payment/sagepay_server';
    
}

