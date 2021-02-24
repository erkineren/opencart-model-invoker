<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse listingSuccessful($product_id, $marketplace)
 * @method ApiResponse listingFailed($product_id, $marketplace, $messages)
 */
class ModelExtensionOpenbayAmazonListing extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazon_listing';
    
}

