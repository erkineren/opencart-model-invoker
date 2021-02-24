<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse orderCreate(KCConnector $connector, $order_data)
 * @method ApiResponse orderRetrieve(KCConnector $connector, $order_id)
 * @method ApiResponse orderUpdate(KCConnector $connector, $order_id, $order_data)
 * @method ApiResponse omOrderRetrieve(KCConnector $connector, $order_id)
 * @method ApiResponse getMethod($address, $total)
 * @method ApiResponse getConnector($accounts, $currency)
 * @method ApiResponse getOrder($order_ref)
 * @method ApiResponse getOrderByOrderId($order_id)
 * @method ApiResponse addOrder($order_id, $order_ref, $data)
 * @method ApiResponse updateOrder($order_id, $order_ref, $data)
 * @method ApiResponse updateOcOrder($order_id, $data)
 * @method ApiResponse updateOcOrderEmail($order_id, $email)
 * @method ApiResponse getCountryByIsoCode2($iso_code_2)
 * @method ApiResponse getCountryByIsoCode3($iso_code_3)
 * @method ApiResponse getZoneByCode($code, $country_id)
 * @method ApiResponse getCountriesByGeoZone($geo_zone_id)
 * @method ApiResponse checkForPaymentTaxes($products = array())
 * @method ApiResponse getDefaultShippingMethod($shipping_methods)
 * @method ApiResponse log($data, $step = 6)
 * @method ApiResponse subscribeNewsletter($customer_id)
 * @method ApiResponse getTotals()
 */
class ModelExtensionPaymentKlarnaCheckout extends BaseModel
{
    const MODEL_NAME = 'extension/payment/klarna_checkout';
    
}

