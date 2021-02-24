<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_info, $pas_ref, $auth_code, $account, $order_ref)
 * @method ApiResponse addTransaction($globalpay_order_id, $type, $order_info)
 * @method ApiResponse addHistory($order_id, $order_status_id, $comment)
 * @method ApiResponse logger($message)
 */
class ModelExtensionPaymentGlobalpay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/globalpay';
    
}

