<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse isAppIdUsed($app_id, $store_id)
 * @method ApiResponse getFinalProductId()
 * @method ApiResponse isAnyProductCategoryModified($store_id)
 * @method ApiResponse getAdvertisedCount($store_id)
 * @method ApiResponse getMapping($store_id)
 * @method ApiResponse setCategoryMapping($google_product_category, $store_id, $category_id)
 * @method ApiResponse getMappedCategory($google_product_category, $store_id)
 * @method ApiResponse getProductByProductAdvertiseGoogleId($product_advertise_google_id)
 * @method ApiResponse getProductAdvertiseGoogle($product_advertise_google_id)
 * @method ApiResponse hasActiveTarget($store_id)
 * @method ApiResponse getRequiredFieldsByProductIds($product_ids, $store_id)
 * @method ApiResponse getRequiredFieldsByFilter($data, $store_id)
 * @method ApiResponse getTargetCountriesByProductIds($product_ids, $store_id)
 * @method ApiResponse getTargetCountriesByFilter($data, $store_id)
 * @method ApiResponse getProductOptionsByProductIds($product_ids)
 * @method ApiResponse getProductOptionsByFilter($data)
 * @method ApiResponse addTarget($target, $store_id)
 * @method ApiResponse deleteProducts($product_ids)
 * @method ApiResponse setAdvertisingBySelect($post_product_ids, $post_target_ids, $store_id)
 * @method ApiResponse setAdvertisingByFilter($data, $post_target_ids, $store_id)
 * @method ApiResponse insertNewProducts($product_ids = array(), $store_id)
 * @method ApiResponse updateGoogleProductCategoryMapping($store_id)
 * @method ApiResponse updateSingleProductFields($data)
 * @method ApiResponse updateMultipleProductFields($filter_data, $data)
 * @method ApiResponse getCategories($data = array(), $store_id)
 * @method ApiResponse getProductCampaigns($product_id, $store_id)
 * @method ApiResponse getProductIssues($product_id, $store_id)
 * @method ApiResponse renameTables()
 * @method ApiResponse createTables()
 * @method ApiResponse fixColumns()
 * @method ApiResponse dropTables()
 * @method ApiResponse deleteEvents()
 * @method ApiResponse createEvents()
 * @method ApiResponse getAllowedTargets()
 */
class AdminModelExtensionAdvertiseGoogle extends BaseModel
{
    const MODEL_NAME = 'extension/advertise/google';
    const IS_ADMIN = true;
}

