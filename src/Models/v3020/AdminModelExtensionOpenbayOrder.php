<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTotalOrders($data = array())
 * @method ApiResponse getOrders($data = array())
 * @method ApiResponse getOrder($order_id)
 */
class AdminModelExtensionOpenbayOrder extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/order';
    
}

