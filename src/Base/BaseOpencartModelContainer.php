<?php


namespace OpencartApi\Base;


use OpencartApi\ModelInvoker;

abstract class BaseOpencartModelContainer
{
    protected static $VERSION;

    protected $loaded = [];

    /**
     * @var ModelInvoker
     */
    private ModelInvoker $invoker;

    public function __construct(ModelInvoker $invoker)
    {
        $this->invoker = $invoker;
    }

    public function __call($name, $arguments)
    {
        $modelName = '\\OpencartApi\\Models\\' . static::$VERSION . '\\' . substr($name, 3);
        if (!($this->loaded[$modelName] ?? false)) {
            $this->loaded[$modelName] = new $modelName($this->invoker);
        }
        return $this->loaded[$modelName];
    }
}