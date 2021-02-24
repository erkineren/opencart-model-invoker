<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReturnAction($data)
 * @method ApiResponse editReturnAction($return_action_id, $data)
 * @method ApiResponse deleteReturnAction($return_action_id)
 * @method ApiResponse getReturnAction($return_action_id)
 * @method ApiResponse getReturnActions($data = array())
 * @method ApiResponse getReturnActionDescriptions($return_action_id)
 * @method ApiResponse getTotalReturnActions()
 */
class AdminModelLocalisationReturnAction extends BaseModel
{
    const MODEL_NAME = 'localisation/return_action';
    const IS_ADMIN = true;
}

