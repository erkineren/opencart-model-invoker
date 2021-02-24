<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse setMerchant($api_key)
 * @method ApiResponse getMethod($payment_address, $total)
 * @method ApiResponse getProductSettings($product_id)
 * @method ApiResponse isEnabled()
 * @method ApiResponse hashOrderId($order_id, $salt)
 * @method ApiResponse saveLookup($order_id, $salt, $proposal_id = null, $application_id = null, $deposit_amount = null)
 * @method ApiResponse getLookupByOrderId($order_id)
 * @method ApiResponse getGlobalSelectedPlans()
 * @method ApiResponse getAllPlans()
 * @method ApiResponse getCartPlans($cart)
 * @method ApiResponse getPlans($default_plans)
 * @method ApiResponse getOrderTotals()
 * @method ApiResponse getProductPlans($product_id)
 */
class ModelExtensionPaymentDivido extends BaseModel
{
    const MODEL_NAME = 'extension/payment/divido';
    
}

