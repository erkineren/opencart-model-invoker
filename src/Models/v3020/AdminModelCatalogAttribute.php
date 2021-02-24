<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addAttribute($data)
 * @method ApiResponse editAttribute($attribute_id, $data)
 * @method ApiResponse deleteAttribute($attribute_id)
 * @method ApiResponse getAttribute($attribute_id)
 * @method ApiResponse getAttributes($data = array())
 * @method ApiResponse getAttributeDescriptions($attribute_id)
 * @method ApiResponse getTotalAttributes()
 * @method ApiResponse getTotalAttributesByAttributeGroupId($attribute_group_id)
 */
class AdminModelCatalogAttribute extends BaseModel
{
    const MODEL_NAME = 'catalog/attribute';
    
}

