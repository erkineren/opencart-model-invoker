<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReview($product_id, $data)
 * @method ApiResponse getReviewsByProductId($product_id, $start = 0, $limit = 20)
 * @method ApiResponse getTotalReviewsByProductId($product_id)
 */
class ModelCatalogReview extends BaseModel
{
    const MODEL_NAME = 'catalog/review';
    
}

