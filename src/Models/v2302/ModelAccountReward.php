<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getRewards($data = array())
 * @method ApiResponse getTotalRewards()
 * @method ApiResponse getTotalPoints()
 */
class ModelAccountReward extends BaseModel
{
    const MODEL_NAME = 'account/reward';
    
}

