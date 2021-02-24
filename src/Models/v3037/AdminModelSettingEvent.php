<?php

namespace OpencartApi\Models\v3037;


use OpencartApi\Http\ApiResponse;
use OpencartApi\Base\BaseModel;


/**
 * @method ApiResponse addEvent($code, $trigger, $action, $status = 1, $sort_order = 0)
 * @method ApiResponse deleteEvent($event_id)
 * @method ApiResponse deleteEventByCode($code)
 * @method ApiResponse enableEvent($event_id)
 * @method ApiResponse disableEvent($event_id)
 * @method ApiResponse uninstall($type, $code)
 * @method ApiResponse getEvent($event_id)
 * @method ApiResponse getEventByCode($code)
 * @method ApiResponse getEvents($data = array())
 * @method ApiResponse getTotalEvents()
 */
class AdminModelSettingEvent extends BaseModel
{
    const MODEL_NAME = 'setting/event';
    const IS_ADMIN = true;
}

