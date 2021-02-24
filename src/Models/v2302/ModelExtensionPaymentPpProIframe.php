<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_data)
 * @method ApiResponse addTransaction($transaction_data)
 */
class ModelExtensionPaymentPpProIframe extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_pro_iframe';
    
}

