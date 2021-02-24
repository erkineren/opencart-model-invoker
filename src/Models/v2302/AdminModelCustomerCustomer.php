<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCustomer($data)
 * @method ApiResponse editCustomer($customer_id, $data)
 * @method ApiResponse editToken($customer_id, $token)
 * @method ApiResponse deleteCustomer($customer_id)
 * @method ApiResponse getCustomer($customer_id)
 * @method ApiResponse getCustomerByEmail($email)
 * @method ApiResponse getCustomers($data = array())
 * @method ApiResponse approve($customer_id)
 * @method ApiResponse getAddress($address_id)
 * @method ApiResponse getAddresses($customer_id)
 * @method ApiResponse getTotalCustomers($data = array())
 * @method ApiResponse getTotalCustomersAwaitingApproval()
 * @method ApiResponse getTotalAddressesByCustomerId($customer_id)
 * @method ApiResponse getTotalAddressesByCountryId($country_id)
 * @method ApiResponse getTotalAddressesByZoneId($zone_id)
 * @method ApiResponse getTotalCustomersByCustomerGroupId($customer_group_id)
 * @method ApiResponse addHistory($customer_id, $comment)
 * @method ApiResponse getHistories($customer_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalHistories($customer_id)
 * @method ApiResponse addTransaction($customer_id, $description = '', $amount = '', $order_id = 0)
 * @method ApiResponse deleteTransaction($order_id)
 * @method ApiResponse getTransactions($customer_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalTransactions($customer_id)
 * @method ApiResponse getTransactionTotal($customer_id)
 * @method ApiResponse getTotalTransactionsByOrderId($order_id)
 * @method ApiResponse addReward($customer_id, $description = '', $points = '', $order_id = 0)
 * @method ApiResponse deleteReward($order_id)
 * @method ApiResponse getRewards($customer_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalRewards($customer_id)
 * @method ApiResponse getRewardTotal($customer_id)
 * @method ApiResponse getTotalCustomerRewardsByOrderId($order_id)
 * @method ApiResponse getIps($customer_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalIps($customer_id)
 * @method ApiResponse getTotalCustomersByIp($ip)
 * @method ApiResponse getTotalLoginAttempts($email)
 * @method ApiResponse deleteLoginAttempts($email)
 */
class AdminModelCustomerCustomer extends BaseModel
{
    const MODEL_NAME = 'customer/customer';
    
}

