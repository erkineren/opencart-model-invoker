<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addRecurring($data)
 * @method ApiResponse editRecurring($recurring_id, $data)
 * @method ApiResponse copyRecurring($recurring_id)
 * @method ApiResponse deleteRecurring($recurring_id)
 * @method ApiResponse getRecurring($recurring_id)
 * @method ApiResponse getRecurringDescription($recurring_id)
 * @method ApiResponse getRecurrings($data = array())
 * @method ApiResponse getTotalRecurrings()
 */
class AdminModelCatalogRecurring extends BaseModel
{
    const MODEL_NAME = 'catalog/recurring';
    const IS_ADMIN = true;
}

