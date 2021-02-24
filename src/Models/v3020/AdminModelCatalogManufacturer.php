<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addManufacturer($data)
 * @method ApiResponse editManufacturer($manufacturer_id, $data)
 * @method ApiResponse deleteManufacturer($manufacturer_id)
 * @method ApiResponse getManufacturer($manufacturer_id)
 * @method ApiResponse getManufacturers($data = array())
 * @method ApiResponse getManufacturerStores($manufacturer_id)
 * @method ApiResponse getManufacturerSeoUrls($manufacturer_id)
 * @method ApiResponse getTotalManufacturers()
 */
class AdminModelCatalogManufacturer extends BaseModel
{
    const MODEL_NAME = 'catalog/manufacturer';
    
}

