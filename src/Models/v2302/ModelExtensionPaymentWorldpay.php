<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse addCard($order_id, $card_data)
 * @method ApiResponse deleteCard($token)
 * @method ApiResponse addOrder($order_info, $order_code)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($worldpay_order_id, $type, $order_info)
 * @method ApiResponse getTransactions($worldpay_order_id)
 * @method ApiResponse recurringPayment($item, $order_id_rand, $token)
 * @method ApiResponse cronPayment()
 * @method ApiResponse getWorldpayOrder($worldpay_order_id)
 * @method ApiResponse updateCronJobRunTime()
 * @method ApiResponse sendCurl($url, $order = null)
 * @method ApiResponse logger($data)
 * @method ApiResponse recurringPayments()
 */
class ModelExtensionPaymentWorldpay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/worldpay';
    
}

