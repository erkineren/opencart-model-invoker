<?php

namespace OpencartApi\Http;


use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\RequestInterface;
use RuntimeException;

/**
 * Class Client
 * @package OpencartApi\Http
 */
class Client extends \GuzzleHttp\Client
{
    /**
     * Client constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (!$config['base_uri'] || !$config['headers']['auth'])
            throw new RuntimeException('base_uri and auth configs required');
        $this->addStack($config);
        parent::__construct($config);
    }

    /**
     * Request Middleware ekle
     *
     * @param $config
     */
    function addStack(&$config)
    {
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());
        $stack->push(Middleware::mapRequest(function (RequestInterface $request) use ($config) {
            $path = str_replace($config['base_uri'], '', $request->getUri());
            $basePath = Uri::withQueryValue(new Uri($config['base_uri']), 'route', 'invoker/');
            return $request->withUri(new Uri($basePath . $path));
        }));
        $config['handler'] = $stack;
    }

}