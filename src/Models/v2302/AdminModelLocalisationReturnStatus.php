<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReturnStatus($data)
 * @method ApiResponse editReturnStatus($return_status_id, $data)
 * @method ApiResponse deleteReturnStatus($return_status_id)
 * @method ApiResponse getReturnStatus($return_status_id)
 * @method ApiResponse getReturnStatuses($data = array())
 * @method ApiResponse getReturnStatusDescriptions($return_status_id)
 * @method ApiResponse getTotalReturnStatuses()
 */
class AdminModelLocalisationReturnStatus extends BaseModel
{
    const MODEL_NAME = 'localisation/return_status';
    
}

