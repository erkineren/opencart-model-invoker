<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReturn($data)
 * @method ApiResponse editReturn($return_id, $data)
 * @method ApiResponse deleteReturn($return_id)
 * @method ApiResponse getReturn($return_id)
 * @method ApiResponse getReturns($data = array())
 * @method ApiResponse getTotalReturns($data = array())
 * @method ApiResponse getTotalReturnsByReturnStatusId($return_status_id)
 * @method ApiResponse getTotalReturnsByReturnReasonId($return_reason_id)
 * @method ApiResponse getTotalReturnsByReturnActionId($return_action_id)
 * @method ApiResponse addReturnHistory($return_id, $return_status_id, $comment, $notify)
 * @method ApiResponse getReturnHistories($return_id, $start = 0, $limit = 10)
 * @method ApiResponse getTotalReturnHistories($return_id)
 * @method ApiResponse getTotalReturnHistoriesByReturnStatusId($return_status_id)
 */
class AdminModelSaleReturn extends BaseModel
{
    const MODEL_NAME = 'sale/return';
    
}

