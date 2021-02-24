<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getInformation($information_id)
 * @method ApiResponse getInformations()
 * @method ApiResponse getInformationLayoutId($information_id)
 */
class ModelCatalogInformation extends BaseModel
{
    const MODEL_NAME = 'catalog/information';
    
}

