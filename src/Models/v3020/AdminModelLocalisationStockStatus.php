<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addStockStatus($data)
 * @method ApiResponse editStockStatus($stock_status_id, $data)
 * @method ApiResponse deleteStockStatus($stock_status_id)
 * @method ApiResponse getStockStatus($stock_status_id)
 * @method ApiResponse getStockStatuses($data = array())
 * @method ApiResponse getStockStatusDescriptions($stock_status_id)
 * @method ApiResponse getTotalStockStatuses()
 */
class AdminModelLocalisationStockStatus extends BaseModel
{
    const MODEL_NAME = 'localisation/stock_status';
    
}

