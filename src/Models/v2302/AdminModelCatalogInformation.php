<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addInformation($data)
 * @method ApiResponse editInformation($information_id, $data)
 * @method ApiResponse deleteInformation($information_id)
 * @method ApiResponse getInformation($information_id)
 * @method ApiResponse getInformations($data = array())
 * @method ApiResponse getInformationDescriptions($information_id)
 * @method ApiResponse getInformationStores($information_id)
 * @method ApiResponse getInformationLayouts($information_id)
 * @method ApiResponse getTotalInformations()
 * @method ApiResponse getTotalInformationsByLayoutId($layout_id)
 */
class AdminModelCatalogInformation extends BaseModel
{
    const MODEL_NAME = 'catalog/information';
    
}

