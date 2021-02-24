<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addAffiliate($data)
 * @method ApiResponse editAffiliate($affiliate_id, $data)
 * @method ApiResponse deleteAffiliate($affiliate_id)
 * @method ApiResponse getAffiliate($affiliate_id)
 * @method ApiResponse getAffiliateByEmail($email)
 * @method ApiResponse getAffiliateByCode($code)
 * @method ApiResponse getAffiliates($data = array())
 * @method ApiResponse approve($affiliate_id)
 * @method ApiResponse getAffiliatesByNewsletter()
 * @method ApiResponse getTotalAffiliates($data = array())
 * @method ApiResponse getTotalAffiliatesAwaitingApproval()
 * @method ApiResponse getTotalAffiliatesByCountryId($country_id)
 * @method ApiResponse getTotalAffiliatesByZoneId($zone_id)
 * @method ApiResponse addTransaction($affiliate_id, $description = '', $amount = '', $order_id = 0)
 * @method ApiResponse deleteTransaction($order_id)
 * @method ApiResponse getTransactions($affiliate_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalTransactions($affiliate_id)
 * @method ApiResponse getTransactionTotal($affiliate_id)
 * @method ApiResponse getTotalTransactionsByOrderId($order_id)
 * @method ApiResponse getTotalLoginAttempts($email)
 * @method ApiResponse deleteLoginAttempts($email)
 */
class AdminModelMarketingAffiliate extends BaseModel
{
    const MODEL_NAME = 'marketing/affiliate';
    
}

