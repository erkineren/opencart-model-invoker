<?php


namespace OpencartApi\Http;

/**
 * Class ClientBuilder
 * @package OpencartApi\Http
 */
class ClientBuilder
{
    protected $baseUrl;
    protected $username;
    protected $password;

    /**
     * @return Client
     */
    function build()
    {
        return new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'auth' => base64_encode($this->username . ':' . $this->password)
            ]
        ]);
    }

    /**
     * @param mixed $baseUrl
     * @return ClientBuilder
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = rtrim($baseUrl, '/') . '/';
        return $this;
    }

    /**
     * @param mixed $username
     * @return ClientBuilder
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param mixed $password
     * @return ClientBuilder
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}