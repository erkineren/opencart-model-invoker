<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addOption($data)
 * @method ApiResponse editOption($option_id, $data)
 * @method ApiResponse deleteOption($option_id)
 * @method ApiResponse getOption($option_id)
 * @method ApiResponse getOptions($data = array())
 * @method ApiResponse getOptionDescriptions($option_id)
 * @method ApiResponse getOptionValue($option_value_id)
 * @method ApiResponse getOptionValues($option_id)
 * @method ApiResponse getOptionValueDescriptions($option_id)
 * @method ApiResponse getTotalOptions()
 */
class AdminModelCatalogOption extends BaseModel
{
    const MODEL_NAME = 'catalog/option';
    const IS_ADMIN = true;
}

