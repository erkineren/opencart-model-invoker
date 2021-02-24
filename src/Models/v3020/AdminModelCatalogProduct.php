<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addProduct($data)
 * @method ApiResponse editProduct($product_id, $data)
 * @method ApiResponse copyProduct($product_id)
 * @method ApiResponse deleteProduct($product_id)
 * @method ApiResponse getProduct($product_id)
 * @method ApiResponse getProducts($data = array())
 * @method ApiResponse getProductsByCategoryId($category_id)
 * @method ApiResponse getProductDescriptions($product_id)
 * @method ApiResponse getProductCategories($product_id)
 * @method ApiResponse getProductFilters($product_id)
 * @method ApiResponse getProductAttributes($product_id)
 * @method ApiResponse getProductOptions($product_id)
 * @method ApiResponse getProductOptionValue($product_id, $product_option_value_id)
 * @method ApiResponse getProductImages($product_id)
 * @method ApiResponse getProductDiscounts($product_id)
 * @method ApiResponse getProductSpecials($product_id)
 * @method ApiResponse getProductRewards($product_id)
 * @method ApiResponse getProductDownloads($product_id)
 * @method ApiResponse getProductStores($product_id)
 * @method ApiResponse getProductSeoUrls($product_id)
 * @method ApiResponse getProductLayouts($product_id)
 * @method ApiResponse getProductRelated($product_id)
 * @method ApiResponse getRecurrings($product_id)
 * @method ApiResponse getTotalProducts($data = array())
 * @method ApiResponse getTotalProductsByTaxClassId($tax_class_id)
 * @method ApiResponse getTotalProductsByStockStatusId($stock_status_id)
 * @method ApiResponse getTotalProductsByWeightClassId($weight_class_id)
 * @method ApiResponse getTotalProductsByLengthClassId($length_class_id)
 * @method ApiResponse getTotalProductsByDownloadId($download_id)
 * @method ApiResponse getTotalProductsByManufacturerId($manufacturer_id)
 * @method ApiResponse getTotalProductsByAttributeId($attribute_id)
 * @method ApiResponse getTotalProductsByOptionId($option_id)
 * @method ApiResponse getTotalProductsByProfileId($recurring_id)
 * @method ApiResponse getTotalProductsByLayoutId($layout_id)
 */
class AdminModelCatalogProduct extends BaseModel
{
    const MODEL_NAME = 'catalog/product';
    
}

