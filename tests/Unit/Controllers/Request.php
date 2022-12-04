<?php

namespace App\Tests\Unit\Controllers;

use \Http\Request as IRequest;

class Request implements IRequest
{

    protected array $data = [
        'data' => 'test'
    ];

    public function getParameter($key, $defaultValue = null)
    {
        return $this->data[$key] ?? $defaultValue;
    }

    public function getQueryParameter($key, $defaultValue = null)
    {
        // TODO: Implement getQueryParameter() method.
    }

    public function getBodyParameter($key, $defaultValue = null)
    {
        // TODO: Implement getBodyParameter() method.
    }

    public function getFile($key, $defaultValue = null)
    {
        // TODO: Implement getFile() method.
    }

    public function getCookie($key, $defaultValue = null)
    {
        // TODO: Implement getCookie() method.
    }

    public function getParameters()
    {
        // TODO: Implement getParameters() method.
    }

    public function getQueryParameters()
    {
        // TODO: Implement getQueryParameters() method.
    }

    public function getBodyParameters()
    {
        // TODO: Implement getBodyParameters() method.
    }

    public function getRawBody()
    {
        // TODO: Implement getRawBody() method.
    }

    public function getCookies()
    {
        // TODO: Implement getCookies() method.
    }

    public function getFiles()
    {
        // TODO: Implement getFiles() method.
    }

    public function getUri()
    {
        // TODO: Implement getUri() method.
    }

    public function getPath()
    {
        // TODO: Implement getPath() method.
    }

    public function getMethod()
    {
        // TODO: Implement getMethod() method.
    }

    public function getHttpAccept()
    {
        // TODO: Implement getHttpAccept() method.
    }

    public function getReferer()
    {
        // TODO: Implement getReferer() method.
    }

    public function getUserAgent()
    {
        // TODO: Implement getUserAgent() method.
    }

    public function getIpAddress()
    {
        // TODO: Implement getIpAddress() method.
    }

    public function isSecure()
    {
        // TODO: Implement isSecure() method.
    }

    public function getQueryString()
    {
        // TODO: Implement getQueryString() method.
    }
}
