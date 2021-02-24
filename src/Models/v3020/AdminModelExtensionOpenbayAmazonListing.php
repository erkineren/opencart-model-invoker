<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse search($search_string, $marketplace)
 * @method ApiResponse getProductByAsin($asin, $market)
 * @method ApiResponse getBestPrice($asin, $condition, $marketplace)
 * @method ApiResponse simpleListing($data)
 * @method ApiResponse getBrowseNodes($request)
 * @method ApiResponse doBulkSearch($search_data)
 * @method ApiResponse deleteSearchResults($marketplace, $product_ids)
 * @method ApiResponse doBulkListing($data)
 */
class AdminModelExtensionOpenbayAmazonListing extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazon_listing';
    
}

