<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomer($data)
 * @method ApiResponse editCustomer($customer_id, $data)
 * @method ApiResponse editPassword($email, $password)
 * @method ApiResponse editAddressId($customer_id, $address_id)
 * @method ApiResponse editCode($email, $code)
 * @method ApiResponse editNewsletter($newsletter)
 * @method ApiResponse getCustomer($customer_id)
 * @method ApiResponse getCustomerByEmail($email)
 * @method ApiResponse getCustomerByCode($code)
 * @method ApiResponse getCustomerByToken($token)
 * @method ApiResponse getTotalCustomersByEmail($email)
 * @method ApiResponse addTransaction($customer_id, $description, $amount = '', $order_id = 0)
 * @method ApiResponse deleteTransactionByOrderId($order_id)
 * @method ApiResponse getTransactionTotal($customer_id)
 * @method ApiResponse getTotalTransactionsByOrderId($order_id)
 * @method ApiResponse getRewardTotal($customer_id)
 * @method ApiResponse getIps($customer_id)
 * @method ApiResponse addLoginAttempt($email)
 * @method ApiResponse getLoginAttempts($email)
 * @method ApiResponse deleteLoginAttempts($email)
 * @method ApiResponse addAffiliate($customer_id, $data)
 * @method ApiResponse editAffiliate($customer_id, $data)
 * @method ApiResponse getAffiliate($customer_id)
 * @method ApiResponse getAffiliateByTracking($tracking)
 */
class ModelAccountCustomer extends BaseModel
{
    const MODEL_NAME = 'account/customer';
    
}

