<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCountry($iso2)
 * @method ApiResponse getZone($name, $country_id)
 * @method ApiResponse addTaxesForTotals($order_id, $totals)
 * @method ApiResponse addCustomer($data)
 * @method ApiResponse getAddress()
 * @method ApiResponse addAddress($address)
 * @method ApiResponse setOrderShipping($order_id, $has_free_shipping)
 * @method ApiResponse hasFreeShipping($order_id)
 * @method ApiResponse getShippingPrice($order_id)
 * @method ApiResponse getAdditionalCharges($order_id)
 * @method ApiResponse addAmazonOrderId($order_id, $amazon_authorization_id, $capture_status, $total, $currency_code)
 * @method ApiResponse addTransaction($amazon_login_pay_order_id, $amazon_authorization_id, $amazon_capture_id, $type, $status, $total)
 * @method ApiResponse closeOrderRef($amazon_order_reference_id)
 * @method ApiResponse sendOrder($order_id, $total, $currency_code)
 * @method ApiResponse editOrder($order_id, $order)
 * @method ApiResponse updateStatus($amazon_id, $type, $status)
 * @method ApiResponse authorizationIpn($xml)
 * @method ApiResponse captureIpn($xml)
 * @method ApiResponse refundIpn($xml)
 * @method ApiResponse capture($amazon_login_pay_order)
 * @method ApiResponse updateCaptureStatus($amazon_login_pay_order_id, $status)
 * @method ApiResponse getOrder($order_id)
 * @method ApiResponse getUserInfo($access_token)
 * @method ApiResponse offAmazon($Action, $parameter_data = array())
 * @method ApiResponse sendCurl($url, $parameters)
 * @method ApiResponse parseRawMessage($body)
 * @method ApiResponse getWidgetJs()
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse logger($data)
 */
class ModelExtensionPaymentAmazonLoginPay extends BaseModel
{
    const MODEL_NAME = 'extension/payment/amazon_login_pay';
    
}

