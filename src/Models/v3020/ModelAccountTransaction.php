<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTransactions($data = array())
 * @method ApiResponse getTotalTransactions()
 * @method ApiResponse getTotalAmount()
 */
class ModelAccountTransaction extends BaseModel
{
    const MODEL_NAME = 'account/transaction';
    
}

