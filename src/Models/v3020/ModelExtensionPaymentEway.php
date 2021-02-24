<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_data)
 * @method ApiResponse addTransaction($eway_order_id, $type, $transactionid, $order_info)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse checkToken($token_id)
 * @method ApiResponse addCard($order_id, $card_data)
 * @method ApiResponse updateCard($order_id, $token)
 * @method ApiResponse updateFullCard($card_id, $token, $card_data)
 * @method ApiResponse deleteCard($order_id)
 * @method ApiResponse getAccessCode($request)
 * @method ApiResponse getSharedAccessCode($request)
 * @method ApiResponse getAccessCodeResult($access_code)
 * @method ApiResponse sendCurl($url, $data, $is_post=true)
 */
class ModelExtensionPaymentEway extends BaseModel
{
    const MODEL_NAME = 'extension/payment/eway';
    
}

