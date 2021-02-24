<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addFilter($data)
 * @method ApiResponse editFilter($filter_group_id, $data)
 * @method ApiResponse deleteFilter($filter_group_id)
 * @method ApiResponse getFilterGroup($filter_group_id)
 * @method ApiResponse getFilterGroups($data = array())
 * @method ApiResponse getFilterGroupDescriptions($filter_group_id)
 * @method ApiResponse getFilter($filter_id)
 * @method ApiResponse getFilters($data)
 * @method ApiResponse getFilterDescriptions($filter_group_id)
 * @method ApiResponse getTotalFilterGroups()
 */
class AdminModelCatalogFilter extends BaseModel
{
    const MODEL_NAME = 'catalog/filter';
    const IS_ADMIN = true;
}

