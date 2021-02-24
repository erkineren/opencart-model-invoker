<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTransactions($data = array())
 * @method ApiResponse getTotalTransactions($data = array())
 */
class AdminModelExtensionReportCustomerTransaction extends BaseModel
{
    const MODEL_NAME = 'extension/report/customer_transaction';
    
}

