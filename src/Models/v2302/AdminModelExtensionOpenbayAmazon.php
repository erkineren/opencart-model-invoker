<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse install()
 * @method ApiResponse uninstall()
 * @method ApiResponse patch()
 * @method ApiResponse scheduleOrders($data)
 * @method ApiResponse saveProduct($product_id, $data_array)
 * @method ApiResponse deleteSaved($product_id, $var = '')
 * @method ApiResponse getSavedProducts()
 * @method ApiResponse getSavedProductsData()
 * @method ApiResponse getProduct($product_id, $var = '')
 * @method ApiResponse getProductCategory($product_id, $var = '')
 * @method ApiResponse setProductUploaded($product_id, $insertion_id, $var = '')
 * @method ApiResponse resetUploaded($insertion_id)
 * @method ApiResponse getProductStatus($product_id)
 * @method ApiResponse getProductErrors($product_id, $version = 2)
 * @method ApiResponse getProductsWithErrors()
 * @method ApiResponse deleteProduct($product_id)
 * @method ApiResponse linkProduct($amazon_sku, $product_id, $var = '')
 * @method ApiResponse removeProductLink($amazon_sku)
 * @method ApiResponse removeAdvancedErrors($product_id)
 * @method ApiResponse getProductLinks($product_id = 'all')
 * @method ApiResponse getUnlinkedProducts()
 * @method ApiResponse getOrderStatusString($order_id)
 * @method ApiResponse updateAmazonOrderTracking($order_id, $courier_id, $courier_from_list, $tracking_no)
 * @method ApiResponse getAmazonOrderId($order_id)
 * @method ApiResponse getAmazonOrderedProducts($order_id)
 * @method ApiResponse getProductQuantity($product_id, $var = '')
 * @method ApiResponse getProductSearchTotal($data = array())
 * @method ApiResponse getProductSearch($data = array())
 * @method ApiResponse updateAmazonSkusQuantities($skus)
 * @method ApiResponse deleteListingReports($marketplace)
 * @method ApiResponse getTotalUnlinkedItemsFromReport($marketplace)
 * @method ApiResponse getUnlinkedItemsFromReport($marketplace, $limit = 100, $page = 1)
 * @method ApiResponse getAsinLink($asin, $marketplace)
 */
class AdminModelExtensionOpenbayAmazon extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazon';
    
}

