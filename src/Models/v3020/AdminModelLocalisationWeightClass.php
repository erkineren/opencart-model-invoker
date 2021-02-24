<?php

namespace OpencartApi\Models\v3020;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addWeightClass($data)
 * @method ApiResponse editWeightClass($weight_class_id, $data)
 * @method ApiResponse deleteWeightClass($weight_class_id)
 * @method ApiResponse getWeightClasses($data = array())
 * @method ApiResponse getWeightClass($weight_class_id)
 * @method ApiResponse getWeightClassDescriptionByUnit($unit)
 * @method ApiResponse getWeightClassDescriptions($weight_class_id)
 * @method ApiResponse getTotalWeightClasses()
 */
class AdminModelLocalisationWeightClass extends BaseModel
{
    const MODEL_NAME = 'localisation/weight_class';
    
}

