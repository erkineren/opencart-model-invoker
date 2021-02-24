<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addAffiliate($data)
 * @method ApiResponse editAffiliate($data)
 * @method ApiResponse editPayment($data)
 * @method ApiResponse editPassword($email, $password)
 * @method ApiResponse getAffiliate($affiliate_id)
 * @method ApiResponse getAffiliateByEmail($email)
 * @method ApiResponse getAffiliateByCode($code)
 * @method ApiResponse getTotalAffiliatesByEmail($email)
 * @method ApiResponse addTransaction($affiliate_id, $amount = '', $order_id = 0)
 * @method ApiResponse deleteTransaction($order_id)
 * @method ApiResponse getTransactionTotal($affiliate_id)
 * @method ApiResponse addLoginAttempt($email)
 * @method ApiResponse getLoginAttempts($email)
 * @method ApiResponse deleteLoginAttempts($email)
 */
class ModelAffiliateAffiliate extends BaseModel
{
    const MODEL_NAME = 'affiliate/affiliate';
    
}

