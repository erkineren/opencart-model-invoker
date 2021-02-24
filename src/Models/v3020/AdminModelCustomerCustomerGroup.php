<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomerGroup($data)
 * @method ApiResponse editCustomerGroup($customer_group_id, $data)
 * @method ApiResponse deleteCustomerGroup($customer_group_id)
 * @method ApiResponse getCustomerGroup($customer_group_id)
 * @method ApiResponse getCustomerGroups($data = array())
 * @method ApiResponse getCustomerGroupDescriptions($customer_group_id)
 * @method ApiResponse getTotalCustomerGroups()
 */
class AdminModelCustomerCustomerGroup extends BaseModel
{
    const MODEL_NAME = 'customer/customer_group';
    const IS_ADMIN = true;
}

