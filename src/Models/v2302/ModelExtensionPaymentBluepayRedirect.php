<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getCards($customer_id)
 * @method ApiResponse addCard($card_data)
 * @method ApiResponse addOrder($order_info, $response_data)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse addTransaction($bluepay_redirect_order_id, $type, $order_info)
 * @method ApiResponse logger($message)
 * @method ApiResponse sendCurl($url, $post_data)
 */
class ModelExtensionPaymentBluepayRedirect extends BaseModel
{
    const MODEL_NAME = 'extension/payment/bluepay_redirect';
    
}

