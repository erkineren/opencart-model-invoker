<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTotal($total)
 * @method ApiResponse confirm($order_info, $order_total)
 * @method ApiResponse unconfirm($order_id)
 */
class ModelExtensionTotalCredit extends BaseModel
{
    const MODEL_NAME = 'extension/total/credit';
    
}

