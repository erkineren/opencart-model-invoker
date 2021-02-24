<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse createClient($credentials)
 * @method ApiResponse verifyCredentials($client)
 * @method ApiResponse getPayment($client, $payment_id)
 * @method ApiResponse getRefunds($client, $payment_id)
 * @method ApiResponse refundPayment($client, $payment_id, $amount, $description)
 * @method ApiResponse log($data)
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 */
class AdminModelExtensionPaymentCardinity extends BaseModel
{
    const MODEL_NAME = 'extension/payment/cardinity';
    
}

