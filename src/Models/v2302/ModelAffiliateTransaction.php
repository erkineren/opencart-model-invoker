<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTransactions($data = array())
 * @method ApiResponse getTotalTransactions()
 * @method ApiResponse getBalance()
 */
class ModelAffiliateTransaction extends BaseModel
{
    const MODEL_NAME = 'affiliate/transaction';
    
}

