<?php

namespace OpencartApi\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Class Response
 * @package OpencartApi\Http
 */
class Response
{
    /**
     * @var \GuzzleHttp\Psr7\Response
     */
    private $guzzleResponse;

    /**
     * @var StreamInterface
     */
    private $body;

    /**
     * Response constructor.
     * @param ResponseInterface $guzzleResponse
     */
    public function __construct($guzzleResponse)
    {
        $this->guzzleResponse = $guzzleResponse;
        $this->body = $guzzleResponse->getBody();
    }

    /**
     * @return \GuzzleHttp\Psr7\Response
     */
    public function getGuzzleResponse()
    {
        return $this->guzzleResponse;
    }

    /**
     * Convert response to json
     *
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->body->getContents(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * Convert response json and decode to array
     *
     * @return mixed
     */
    public function toArray()
    {
        return json_decode($this->body->getContents(), true);
    }

    /**
     * Get raw response
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getRawResponse();
    }

    /**
     * Get raw response received from request
     *
     * @return string
     */
    public function getRawResponse()
    {
        return "{$this->body}";
    }
}