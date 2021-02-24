<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addOrder($data)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse createPayment($key, $secret, $payment_data)
 * @method ApiResponse finalizePayment($key, $secret, $payment_id, $pares)
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getSupportedCurrencies()
 * @method ApiResponse log($data, $class_step = 6, $function_step = 6)
 */
class ModelExtensionPaymentCardinity extends BaseModel
{
    const MODEL_NAME = 'extension/payment/cardinity';
    
}

