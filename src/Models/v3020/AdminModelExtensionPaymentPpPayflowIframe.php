<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse log($message)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse updateOrderStatus($order_id, $status)
 * @method ApiResponse addTransaction($data)
 * @method ApiResponse getTransactions($order_id)
 * @method ApiResponse getTransaction($transaction_reference)
 * @method ApiResponse call($data)
 */
class AdminModelExtensionPaymentPpPayflowIframe extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_payflow_iframe';
    
}

