<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse generateToken($gateway, $data = array())
 * @method ApiResponse getTransaction($gateway, $transaction_id)
 * @method ApiResponse getTransactions($gateway, $data = array())
 * @method ApiResponse voidTransaction($gateway, $transaction_id)
 * @method ApiResponse settleTransaction($gateway, $transaction_id, $amount)
 * @method ApiResponse refundTransaction($gateway, $transaction_id, $amount)
 * @method ApiResponse verifyCredentials($gateway)
 * @method ApiResponse verifyMerchantAccount($gateway, $merchant_account_id)
 * @method ApiResponse setGateway($access_token)
 * @method ApiResponse log($data)
 */
class AdminModelExtensionPaymentPpBraintree extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_braintree';
    
}

