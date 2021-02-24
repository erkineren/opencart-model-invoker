<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addReview($data)
 * @method ApiResponse editReview($review_id, $data)
 * @method ApiResponse deleteReview($review_id)
 * @method ApiResponse getReview($review_id)
 * @method ApiResponse getReviews($data = array())
 * @method ApiResponse getTotalReviews($data = array())
 * @method ApiResponse getTotalReviewsAwaitingApproval()
 */
class AdminModelCatalogReview extends BaseModel
{
    const MODEL_NAME = 'catalog/review';
    const IS_ADMIN = true;
}

