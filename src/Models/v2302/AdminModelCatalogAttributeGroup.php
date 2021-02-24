<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addAttributeGroup($data)
 * @method ApiResponse editAttributeGroup($attribute_group_id, $data)
 * @method ApiResponse deleteAttributeGroup($attribute_group_id)
 * @method ApiResponse getAttributeGroup($attribute_group_id)
 * @method ApiResponse getAttributeGroups($data = array())
 * @method ApiResponse getAttributeGroupDescriptions($attribute_group_id)
 * @method ApiResponse getTotalAttributeGroups()
 */
class AdminModelCatalogAttributeGroup extends BaseModel
{
    const MODEL_NAME = 'catalog/attribute_group';
    
}

