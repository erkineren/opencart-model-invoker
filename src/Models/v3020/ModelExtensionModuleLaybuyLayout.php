<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getStatusLabel($id)
 * @method ApiResponse getTransactionByOrderId($order_id)
 * @method ApiResponse getTransactionStatuses()
 * @method ApiResponse isLayBuyOrder($order_id)
 */
class ModelExtensionModuleLaybuyLayout extends BaseModel
{
    const MODEL_NAME = 'extension/module/laybuy_layout';
    
}

