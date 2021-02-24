<?php


namespace OpencartApi\Base;


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
    private static $_invoker;

    /**
     * @var ModelInvoker
     */
    private $invoker;

    public function __construct(ModelInvoker $invoker)
    {
        $this->invoker = $invoker;
    }

    /**
     * @return ModelInvoker
     */
    public static function getInvoker()
    {
        return self::$_invoker;
    }

    /**
     * @param ModelInvoker $_invoker
     */
    public static function setInvoker($_invoker)
    {
        self::$_invoker = $_invoker;
    }

    /**
     * @param $name
     * @param $arguments
     * @return ApiResponse
     */
    public static function __callStatic($name, $arguments)
    {
        return self::$_invoker->invoke(static::MODEL_NAME, $name, $arguments, static::IS_ADMIN);
    }

    public function __call($name, $arguments)
    {
        return $this->invoker->invoke(static::MODEL_NAME, $name, $arguments, static::IS_ADMIN);
    }
}