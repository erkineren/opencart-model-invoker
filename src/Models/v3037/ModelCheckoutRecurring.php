<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addRecurring($order_id, $description, $data)
 * @method ApiResponse editReference($order_recurring_id, $reference)
 */
class ModelCheckoutRecurring extends BaseModel
{
    const MODEL_NAME = 'checkout/recurring';
    
}

