<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomer($data)
 * @method ApiResponse editCustomer($data)
 * @method ApiResponse editPassword($email, $password)
 * @method ApiResponse editCode($email, $code)
 * @method ApiResponse editNewsletter($newsletter)
 * @method ApiResponse getCustomer($customer_id)
 * @method ApiResponse getCustomerByEmail($email)
 * @method ApiResponse getCustomerByCode($code)
 * @method ApiResponse getCustomerByToken($token)
 * @method ApiResponse getTotalCustomersByEmail($email)
 * @method ApiResponse getRewardTotal($customer_id)
 * @method ApiResponse getIps($customer_id)
 * @method ApiResponse addLoginAttempt($email)
 * @method ApiResponse getLoginAttempts($email)
 * @method ApiResponse deleteLoginAttempts($email)
 */
class ModelAccountCustomer extends BaseModel
{
    const MODEL_NAME = 'account/customer';
    
}

