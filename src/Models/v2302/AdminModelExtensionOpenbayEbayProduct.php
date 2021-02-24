<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getTaxRate($class_id)
 * @method ApiResponse countImportImages()
 * @method ApiResponse getProductOptions($product_id)
 * @method ApiResponse repairLinks()
 * @method ApiResponse searchEbayCatalog($search, $category_id, $page = 1)
 * @method ApiResponse getPartsCompatibilityOptions($category_id)
 * @method ApiResponse getPartsCompatibilityValues($filters)
 * @method ApiResponse getItemRecommendations($filters)
 */
class AdminModelExtensionOpenbayEbayProduct extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay_product';
    
}

