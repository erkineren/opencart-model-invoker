<?php


namespace OpencartApi\Models;


use OpencartApi\Http\ApiResponse;
use OpencartApi\ModelInvoker;

/**
 * Otomatik oluşturulan modeller için base class
 *
 * Class BaseModel
 * @package OpencartApi\Models
 */
abstract class BaseModel
{
    const MODEL_NAME = '';
    const IS_ADMIN = false;

    /**
     * @var ModelInvoker
     */
    private static $invoker;

    /**
     * @return ModelInvoker
     */
    public static function getInvoker()
    {
        return self::$invoker;
    }

    /**
     * @param ModelInvoker $invoker
     */
    public static function setInvoker($invoker)
    {
        self::$invoker = $invoker;
    }

    /**
     * @param $name
     * @param $arguments
     * @return ApiResponse
     */
    public static function __callStatic($name, $arguments)
    {
        return self::$invoker->invoke(static::MODEL_NAME, $name, $arguments, static::IS_ADMIN);
    }
}