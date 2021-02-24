<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse patch()
 * @method ApiResponse totalLinked()
 * @method ApiResponse loadLinked($limit = 100, $page = 1)
 * @method ApiResponse loadLinkedStatus($item_ids)
 * @method ApiResponse loadUnlinked($limit = 200, $page = 1, $filter = array())
 * @method ApiResponse loadItemLinks()
 * @method ApiResponse saveItemLink($data)
 * @method ApiResponse getSellerStoreCategories()
 * @method ApiResponse getCategory($parent)
 * @method ApiResponse getSuggestedCategories($qry)
 * @method ApiResponse getShippingService($international, $type)
 * @method ApiResponse getShippingLocations()
 * @method ApiResponse getEbayCategorySpecifics($category_id)
 * @method ApiResponse getCategoryFeatures($category_id)
 * @method ApiResponse getSellerSummary()
 * @method ApiResponse getPaymentTypes()
 * @method ApiResponse getPopularCategories()
 * @method ApiResponse ebayVerifyAddItem($data, $options)
 * @method ApiResponse ebayAddItem($data, $options)
 * @method ApiResponse logCategoryUsed($category_id)
 * @method ApiResponse getProductStock($id)
 * @method ApiResponse getUsage()
 * @method ApiResponse getPlans()
 * @method ApiResponse getMyPlan()
 * @method ApiResponse getLiveListingArray()
 * @method ApiResponse verifyCredentials()
 * @method ApiResponse editSave($data)
 * @method ApiResponse getProductAttributes($product_id)
 */
class AdminModelExtensionOpenbayEbay extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay';
    
}

