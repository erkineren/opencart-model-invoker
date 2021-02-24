<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse search($search_string)
 * @method ApiResponse getProductByAsin($asin)
 * @method ApiResponse getBestPrice($asin, $condition)
 * @method ApiResponse simpleListing($data)
 * @method ApiResponse getBrowseNodes($request)
 * @method ApiResponse deleteSearchResults($product_ids)
 * @method ApiResponse doBulkListing($data)
 * @method ApiResponse doBulkSearch($search_data)
 */
class AdminModelExtensionOpenbayAmazonusListing extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazonus_listing';
    
}

