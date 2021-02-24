<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addWishlist($product_id)
 * @method ApiResponse deleteWishlist($product_id)
 * @method ApiResponse getWishlist()
 * @method ApiResponse getTotalWishlist()
 */
class ModelAccountWishlist extends BaseModel
{
    const MODEL_NAME = 'account/wishlist';
    
}

