<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse addOrder($order_data)
 * @method ApiResponse addTransaction($transaction_data)
 * @method ApiResponse paymentRequestInfo()
 * @method ApiResponse getTotalCaptured($paypal_order_id)
 * @method ApiResponse getTotalRefunded($paypal_order_id)
 * @method ApiResponse getTransactionRow($transaction_id)
 * @method ApiResponse updateOrder($capture_status, $order_id)
 * @method ApiResponse call($data)
 * @method ApiResponse recurringPayments()
 * @method ApiResponse createToken($len = 32)
 * @method ApiResponse log($data, $title = null)
 * @method ApiResponse cleanReturn($data)
 */
class ModelExtensionPaymentPpExpress extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_express';
    
}

