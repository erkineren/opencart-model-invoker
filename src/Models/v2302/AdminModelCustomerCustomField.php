<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomField($data)
 * @method ApiResponse editCustomField($custom_field_id, $data)
 * @method ApiResponse deleteCustomField($custom_field_id)
 * @method ApiResponse getCustomField($custom_field_id)
 * @method ApiResponse getCustomFields($data = array())
 * @method ApiResponse getCustomFieldDescriptions($custom_field_id)
 * @method ApiResponse getCustomFieldValue($custom_field_value_id)
 * @method ApiResponse getCustomFieldValues($custom_field_id)
 * @method ApiResponse getCustomFieldCustomerGroups($custom_field_id)
 * @method ApiResponse getCustomFieldValueDescriptions($custom_field_id)
 * @method ApiResponse getTotalCustomFields()
 */
class AdminModelCustomerCustomField extends BaseModel
{
    const MODEL_NAME = 'customer/custom_field';
    
}

