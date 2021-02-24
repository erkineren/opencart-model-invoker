<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCustomField($custom_field_id)
 * @method ApiResponse getCustomFields($customer_group_id = 0)
 */
class ModelAccountCustomField extends BaseModel
{
    const MODEL_NAME = 'account/custom_field';
    
}

