<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse addCard($card_data)
 * @method ApiResponse updateCard($card_id, $token)
 * @method ApiResponse getCard($card_id, $token)
 * @method ApiResponse deleteCard($card_id)
 * @method ApiResponse addOrder($order_id, $response_data, $payment_data, $card_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse updateOrder($order_info, $data)
 * @method ApiResponse deleteOrder($vendor_tx_code)
 * @method ApiResponse addTransaction($sagepay_direct_order_id, $type, $order_info)
 * @method ApiResponse recurringPayment($item, $vendor_tx_code)
 * @method ApiResponse cronPayment()
 * @method ApiResponse updateCronJobRunTime()
 * @method ApiResponse sendCurl($url, $payment_data, $i = null)
 * @method ApiResponse logger($title, $data)
 * @method ApiResponse recurringPayments()
 */
class ModelExtensionPaymentSagepayDirect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/sagepay_direct';
    
}

