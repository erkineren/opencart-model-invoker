<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getManufacturer($manufacturer_id)
 * @method ApiResponse getManufacturers($data = array())
 */
class ModelCatalogManufacturer extends BaseModel
{
    const MODEL_NAME = 'catalog/manufacturer';
    
}

