<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse listingSuccessful($product_id)
 * @method ApiResponse listingFailed($product_id, $messages)
 */
class ModelExtensionOpenbayAmazonusListing extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazonus_listing';
    
}

