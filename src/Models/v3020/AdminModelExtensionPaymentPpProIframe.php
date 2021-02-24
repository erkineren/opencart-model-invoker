<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getTotalCaptured($paypal_iframe_order_id)
 * @method ApiResponse getTotalRefunded($paypal_iframe_order_id)
 * @method ApiResponse getTotalRefundedTransaction($transaction_id)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse call($data)
 * @method ApiResponse updateOrder($capture_status, $order_id)
 * @method ApiResponse updateTransaction($transaction)
 * @method ApiResponse addTransaction($transaction_data, $request_data = array())
 * @method ApiResponse log($data, $title = null)
 * @method ApiResponse getTransaction($transaction_id)
 * @method ApiResponse getOrderId($transaction_id)
 * @method ApiResponse updateAuthorizationId($paypal_iframe_order_id, $authorization_id)
 * @method ApiResponse updateRefundTransaction($transaction_id, $transaction_type)
 * @method ApiResponse getFailedTransaction($paypl_iframe_order_transaction_id)
 * @method ApiResponse getLocalTransaction($transaction_id)
 */
class AdminModelExtensionPaymentPpProIframe extends BaseModel
{
    const MODEL_NAME = 'extension/payment/pp_pro_iframe';
    const IS_ADMIN = true;
}

