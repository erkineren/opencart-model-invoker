<?php

namespace OpencartApi\Models\v2302;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addEvent($code, $trigger, $action, $status = 1)
 * @method ApiResponse deleteEvent($code)
 * @method ApiResponse getEvent($code, $trigger, $action)
 * @method ApiResponse enableEvent($event_id)
 * @method ApiResponse disableEvent($event_id)
 * @method ApiResponse uninstall($type, $code)
 * @method ApiResponse getEvents($data = array())
 * @method ApiResponse getTotalEvents()
 */
class AdminModelExtensionEvent extends BaseModel
{
    const MODEL_NAME = 'extension/event';
    
}

