<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getRelistRule($id)
 * @method ApiResponse importItems($data)
 * @method ApiResponse getDisplayProducts()
 * @method ApiResponse resize($filename, $width, $height, $type = "")
 */
class ModelExtensionOpenbayEbayProduct extends BaseModel
{
    const MODEL_NAME = 'extension/openbay/ebay_product';
    
}

