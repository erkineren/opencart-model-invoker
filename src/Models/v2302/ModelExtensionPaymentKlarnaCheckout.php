<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse orderCreate(KCConnector $connector, $order_data)
 * @method ApiResponse orderRetrieve(KCConnector $connector, $order_id)
 * @method ApiResponse orderUpdate(KCConnector $connector, $order_id, $order_data)
 * @method ApiResponse omOrderRetrieve(KCConnector $connector, $order_id)
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getConnector($accounts, $country_id, $currency)
 * @method ApiResponse getOrder($order_ref)
 * @method ApiResponse getOrderByOrderId($order_id)
 * @method ApiResponse addOrder($order_id, $order_ref, $data)
 * @method ApiResponse updateOrder($order_id, $order_ref, $data)
 * @method ApiResponse updateOcOrder($order_id, $data)
 * @method ApiResponse updateOcOrderEmail($order_id, $email)
 * @method ApiResponse getCountryByIsoCode2($iso_code_2)
 * @method ApiResponse getCountryByIsoCode3($iso_code_3)
 * @method ApiResponse getZoneByCode($code, $country_id)
 * @method ApiResponse getDefaultShippingMethod($shipping_methods)
 * @method ApiResponse log($data, $step = 6)
 */
class ModelExtensionPaymentKlarnaCheckout extends BaseModel
{
    const MODEL_NAME = 'extension/payment/klarna_checkout';
    
}

