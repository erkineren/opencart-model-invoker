<?php


namespace OpencartApi\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Class ApiResponse
 * @package OpencartApi\Http
 */
class ApiResponse extends Response
{
    protected $status;
    protected $message;
    protected $result;

    /**
     * ApiResponse constructor.
     * @param ResponseInterface $guzzleResponse
     */
    public function __construct(ResponseInterface $guzzleResponse)
    {
        parent::__construct($guzzleResponse);
        $array = $this->toArray();
        if (is_null($array)) {
            throw new \RuntimeException($guzzleResponse->getBody()->getContents());
        }
        $this->status = $array['status'];
        $this->message = $array['message'];
        $this->result = $array['result'];
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }


}