<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse updateViewed($product_id)
 * @method ApiResponse getProduct($product_id)
 * @method ApiResponse getProducts($data = array())
 * @method ApiResponse getProductSpecials($data = array())
 * @method ApiResponse getLatestProducts($limit)
 * @method ApiResponse getPopularProducts($limit)
 * @method ApiResponse getBestSellerProducts($limit)
 * @method ApiResponse getProductAttributes($product_id)
 * @method ApiResponse getProductOptions($product_id)
 * @method ApiResponse getProductDiscounts($product_id)
 * @method ApiResponse getProductImages($product_id)
 * @method ApiResponse getProductRelated($product_id)
 * @method ApiResponse getProductLayoutId($product_id)
 * @method ApiResponse getCategories($product_id)
 * @method ApiResponse getTotalProducts($data = array())
 * @method ApiResponse getProfile($product_id, $recurring_id)
 * @method ApiResponse getProfiles($product_id)
 * @method ApiResponse getTotalProductSpecials()
 */
class ModelCatalogProduct extends BaseModel
{
    const MODEL_NAME = 'catalog/product';
    
}

