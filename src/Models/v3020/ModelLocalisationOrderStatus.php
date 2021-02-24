<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getOrderStatus($order_status_id)
 * @method ApiResponse getOrderStatuses()
 */
class ModelLocalisationOrderStatus extends BaseModel
{
    const MODEL_NAME = 'localisation/order_status';
    
}

