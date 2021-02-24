<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addOrderStatus($data)
 * @method ApiResponse editOrderStatus($order_status_id, $data)
 * @method ApiResponse deleteOrderStatus($order_status_id)
 * @method ApiResponse getOrderStatus($order_status_id)
 * @method ApiResponse getOrderStatuses($data = array())
 * @method ApiResponse getOrderStatusDescriptions($order_status_id)
 * @method ApiResponse getTotalOrderStatuses()
 */
class AdminModelLocalisationOrderStatus extends BaseModel
{
    const MODEL_NAME = 'localisation/order_status';
    
}

