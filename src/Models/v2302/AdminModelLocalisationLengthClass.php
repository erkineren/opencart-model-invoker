<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addLengthClass($data)
 * @method ApiResponse editLengthClass($length_class_id, $data)
 * @method ApiResponse deleteLengthClass($length_class_id)
 * @method ApiResponse getLengthClasses($data = array())
 * @method ApiResponse getLengthClass($length_class_id)
 * @method ApiResponse getLengthClassDescriptionByUnit($unit)
 * @method ApiResponse getLengthClassDescriptions($length_class_id)
 * @method ApiResponse getTotalLengthClasses()
 */
class AdminModelLocalisationLengthClass extends BaseModel
{
    const MODEL_NAME = 'localisation/length_class';
    
}

