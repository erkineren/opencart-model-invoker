<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getPayPalOrder($order_id)
 * @method ApiResponse editPayPalOrderStatus($order_id, $capture_status)
 * @method ApiResponse addTransaction($transaction_data, $request_data = array())
 * @method ApiResponse updateTransaction($transaction)
 * @method ApiResponse getPaypalOrderByTransactionId($transaction_id)
 * @method ApiResponse getFailedTransaction($paypal_order_transaction_id)
 * @method ApiResponse getLocalTransaction($transaction_id)
 * @method ApiResponse getTransaction($transaction_id)
 * @method ApiResponse getCurrencies()
 * @method ApiResponse getOrderId($transaction_id)
 * @method ApiResponse getCapturedTotal($paypal_order_id)
 * @method ApiResponse getRefundedTotal($paypal_order_id)
 * @method ApiResponse getRefundedTotalByParentId($transaction_id)
 * @method ApiResponse cleanReturn($data)
 * @method ApiResponse log($data, $title = null)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse totalCaptured($paypal_order_id)
 * @method ApiResponse getTransactions($paypal_order_id)
 * @method ApiResponse getTokens($test)
 * @method ApiResponse getUserInfo($merchant_id, $test, $access_token)
 * @method ApiResponse call($data)
 */
class AdminModelExtensionPaymentPpExpress extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_express';
    const IS_ADMIN = true;
}

