<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCustomerApprovals($data = array())
 * @method ApiResponse getCustomerApproval($customer_approval_id)
 * @method ApiResponse getTotalCustomerApprovals($data = array())
 * @method ApiResponse approveCustomer($customer_id)
 * @method ApiResponse denyCustomer($customer_id)
 * @method ApiResponse approveAffiliate($customer_id)
 * @method ApiResponse denyAffiliate($customer_id)
 */
class AdminModelCustomerCustomerApproval extends BaseModel
{
    const MODEL_NAME = 'customer/customer_approval';
    const IS_ADMIN = true;
}

