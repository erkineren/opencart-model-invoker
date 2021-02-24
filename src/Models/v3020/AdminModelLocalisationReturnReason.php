<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReturnReason($data)
 * @method ApiResponse editReturnReason($return_reason_id, $data)
 * @method ApiResponse deleteReturnReason($return_reason_id)
 * @method ApiResponse getReturnReason($return_reason_id)
 * @method ApiResponse getReturnReasons($data = array())
 * @method ApiResponse getReturnReasonDescriptions($return_reason_id)
 * @method ApiResponse getTotalReturnReasons()
 */
class AdminModelLocalisationReturnReason extends BaseModel
{
    const MODEL_NAME = 'localisation/return_reason';
    
}

