<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getCategory($category_id)
 * @method ApiResponse getCategories($parent_id = 0)
 * @method ApiResponse getCategoryFilters($category_id)
 * @method ApiResponse getCategoryLayoutId($category_id)
 * @method ApiResponse getTotalCategoriesByCategoryId($parent_id = 0)
 */
class ModelCatalogCategory extends BaseModel
{
    const MODEL_NAME = 'catalog/category';
    
}

