<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getAllPlans()
 * @method ApiResponse getLookupByOrderId($order_id)
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 */
class AdminModelExtensionPaymentDivido extends BaseModel
{
    const MODEL_NAME = 'extension/payment/divido';
    
}

