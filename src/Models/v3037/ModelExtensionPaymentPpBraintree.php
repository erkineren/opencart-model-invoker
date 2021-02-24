<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse generateToken($gateway, $data)
 * @method ApiResponse addTransaction($gateway, $data)
 * @method ApiResponse getCustomer($gateway, $customer_id, $log = true)
 * @method ApiResponse getPaymentMethod($gateway, $token)
 * @method ApiResponse addPaymentMethod($gateway, $data)
 * @method ApiResponse deletePaymentMethod($gateway, $token)
 * @method ApiResponse getPaymentMethodNonce($gateway, $token)
 * @method ApiResponse createPaymentMethodNonce($gateway, $token)
 * @method ApiResponse setCredentials()
 * @method ApiResponse setGateway($access_token)
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getSupportedCurrencies()
 * @method ApiResponse log($data)
 */
class ModelExtensionPaymentPpBraintree extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_braintree';
    
}

