<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addCategory($data)
 * @method ApiResponse editCategory($category_id, $data)
 * @method ApiResponse deleteCategory($category_id)
 * @method ApiResponse repairCategories($parent_id = 0)
 * @method ApiResponse getCategory($category_id)
 * @method ApiResponse getCategories($data = array())
 * @method ApiResponse getCategoryDescriptions($category_id)
 * @method ApiResponse getCategoryPath($category_id)
 * @method ApiResponse getCategoryFilters($category_id)
 * @method ApiResponse getCategoryStores($category_id)
 * @method ApiResponse getCategoryLayouts($category_id)
 * @method ApiResponse getTotalCategories()
 * @method ApiResponse getTotalCategoriesByLayoutId($layout_id)
 */
class AdminModelCatalogCategory extends BaseModel
{
    const MODEL_NAME = 'catalog/category';
    
}

