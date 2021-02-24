<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse setStatus($insertion_id, $status_string)
 * @method ApiResponse getProductRows($insertion_id)
 * @method ApiResponse getProduct($insertion_id)
 * @method ApiResponse linkItems(array $data)
 * @method ApiResponse insertError($data)
 * @method ApiResponse deleteErrors($insertion_id)
 * @method ApiResponse setSubmitError($insertion_id, $message)
 * @method ApiResponse linkProduct($amazonus_sku, $product_id, $var = '')
 * @method ApiResponse getProductQuantity($product_id, $var = '')
 * @method ApiResponse updateSearch($results)
 * @method ApiResponse addListingReport($data)
 * @method ApiResponse removeListingReportLock($marketplace)
 */
class ModelExtensionOpenbayAmazonusProduct extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/amazonus_product';
    
}

