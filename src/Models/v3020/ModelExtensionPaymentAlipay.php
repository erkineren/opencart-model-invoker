<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse pageExecute($request, $httpmethod = "POST")
 * @method ApiResponse rsaCheckV1($params, $signType='RSA')
 * @method ApiResponse getSignContent($params)
 * @method ApiResponse generateSign($params, $signType = "RSA")
 */
class ModelExtensionPaymentAlipay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/alipay';
    
}

