<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getMethod()
 * @method ApiResponse verifyOrder()
 * @method ApiResponse verifyShipping()
 * @method ApiResponse verifyCart()
 * @method ApiResponse verifyLogin()
 * @method ApiResponse verifyTotal()
 * @method ApiResponse verifyReference()
 * @method ApiResponse verifyOrderSessionData()
 * @method ApiResponse cartRedirect($message = null, $return_value = false)
 * @method ApiResponse getTotals(&$total_data)
 * @method ApiResponse isTotalPositive()
 * @method ApiResponse makeOrder()
 * @method ApiResponse getWidgetJs()
 * @method ApiResponse submitOrderDetails($order_reference_id, $order_id, $currency_code, $text_version)
 * @method ApiResponse confirmOrder($order_reference_id)
 * @method ApiResponse authorizeOrder($order)
 * @method ApiResponse fetchOrderId($order_reference_id)
 * @method ApiResponse fetchOrder($order_reference_id)
 * @method ApiResponse captureOrder($amazon_authorization_id, $total, $currency)
 * @method ApiResponse cancelOrder($order_reference_id, $reason)
 * @method ApiResponse closeOrder($order_reference_id, $reason)
 * @method ApiResponse isOrderInState($order_reference_id, $states = array())
 * @method ApiResponse findOrAddOrder($order)
 * @method ApiResponse getOrderByOrderId($order_id)
 * @method ApiResponse addAuthorization($amazon_login_pay_order_id, $authorization)
 * @method ApiResponse updateCapturedStatus($amazon_login_pay_order_id, $status)
 * @method ApiResponse findCapture($amazon_capture_id)
 * @method ApiResponse addTransaction($data)
 * @method ApiResponse isShippingFree($order_id)
 * @method ApiResponse getPlatformId()
 * @method ApiResponse parseIpnBody($json)
 * @method ApiResponse parseJson($json)
 * @method ApiResponse updateStatus($amazon_id, $type, $status)
 * @method ApiResponse findOCOrderId($amazon_authorization_id)
 * @method ApiResponse findAOrderId($amazon_authorization_id)
 * @method ApiResponse getTotalCaptured($amazon_login_pay_order_id)
 * @method ApiResponse authorizationIpn($xml)
 * @method ApiResponse captureIpn($xml)
 * @method ApiResponse refundIpn($xml)
 * @method ApiResponse updatePaymentAddress($order_id, $amazon_address)
 * @method ApiResponse amazonAddressToOcAddress($amazon_address, $default_telephone = '0000000')
 * @method ApiResponse getAddress($order_reference_id)
 * @method ApiResponse getCountryInfo($amazon_address)
 * @method ApiResponse getZoneInfo($amazon_address, $country_info)
 * @method ApiResponse getCurlUrl()
 * @method ApiResponse urlencode($value)
 * @method ApiResponse calculateStringToSignV2($url, $params)
 * @method ApiResponse makePost($url, $action, $extra = array())
 * @method ApiResponse postCurl($action, $params = array())
 * @method ApiResponse loggedException($log_message, $error_message)
 * @method ApiResponse logHandler($code, $message, $file, $line)
 * @method ApiResponse debugLog($type, $data, $id = null)
 */
class ModelExtensionPaymentAmazonLoginPay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/amazon_login_pay';
    
}

