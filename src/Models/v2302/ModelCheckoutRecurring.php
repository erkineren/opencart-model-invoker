<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse create($recurring, $order_id, $description)
 * @method ApiResponse addReference($order_recurring_id, $reference)
 */
class ModelCheckoutRecurring extends BaseModel
{
    const MODEL_NAME = 'checkout/recurring';
    
}

