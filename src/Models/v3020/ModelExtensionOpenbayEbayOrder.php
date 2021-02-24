<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse importOrders($data)
 * @method ApiResponse orderHandle($order)
 * @method ApiResponse addOrderLine($data, $order_id, $created)
 * @method ApiResponse addOrderLines($order, $order_id)
 * @method ApiResponse getOrderLine($txn_id, $item_id)
 * @method ApiResponse getOrderLines($order_id)
 * @method ApiResponse removeOrderLines($canceling)
 * @method ApiResponse cancel($order_id)
 * @method ApiResponse updatePaymentDetails($order_id, $order)
 * @method ApiResponse getHistory($order_id)
 * @method ApiResponse hasAddress($order_id)
 * @method ApiResponse update($order_id, $order_status_id, $comment = '')
 * @method ApiResponse confirm($order_id, $order_status_id, $comment = '')
 * @method ApiResponse getCountryAddressFormat($iso2)
 * @method ApiResponse orderLinkCreate($order_id, $smp_id)
 * @method ApiResponse delete($order_id)
 * @method ApiResponse lockAdd($smp_id)
 * @method ApiResponse lockDelete($smp_id)
 * @method ApiResponse lockExists($smp_id)
 * @method ApiResponse addOrderHistory($order_id)
 */
class ModelExtensionOpenbayEbayOrder extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay_order';
    
}

