<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse getUrlAlias($keyword)
 */
class AdminModelCatalogUrlAlias extends BaseModel
{
    const MODEL_NAME = 'catalog/url_alias';
    const IS_ADMIN = true;
}

