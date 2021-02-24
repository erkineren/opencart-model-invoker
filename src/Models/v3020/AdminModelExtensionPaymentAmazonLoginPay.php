<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse cancel($amazon_login_pay_order)
 * @method ApiResponse updateCancelStatus($amazon_login_pay_order_id, $status)
 * @method ApiResponse capture($amazon_login_pay_order, $amount)
 * @method ApiResponse closeOrderRef($amazon_order_reference_id)
 * @method ApiResponse updateCaptureStatus($amazon_login_pay_order_id, $status)
 * @method ApiResponse refund($amazon_login_pay_order, $amount)
 * @method ApiResponse getUnCaptured($amazon_login_pay_order_id)
 * @method ApiResponse updateRefundStatus($amazon_login_pay_order_id, $status)
 * @method ApiResponse getCapturesRemaining($amazon_login_pay_order_id)
 * @method ApiResponse addTransaction($amazon_login_pay_order_id, $type, $status, $total, $amazon_authorization_id = null, $amazon_capture_id = null, $amazon_refund_id = null)
 * @method ApiResponse getTotalCaptured($amazon_login_pay_order_id)
 * @method ApiResponse getTotalRefunded($amazon_login_pay_order_id)
 * @method ApiResponse validateDetails($data)
 * @method ApiResponse offAmazon($Action, $parameter_data, $post_data = array())
 * @method ApiResponse sendCurl($url, $parameters)
 * @method ApiResponse logger($message)
 */
class AdminModelExtensionPaymentAmazonLoginPay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/amazon_login_pay';
    
}

