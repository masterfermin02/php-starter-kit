<?php

namespace App\Tests\Unit\Controllers;

class Response implements \Http\Response
{

    public function setStatusCode($statusCode, $statusText = null)
    {
        // TODO: Implement setStatusCode() method.
    }

    public function getStatusCode()
    {
        // TODO: Implement getStatusCode() method.
    }

    public function addHeader($name, $value)
    {
        // TODO: Implement addHeader() method.
    }

    public function setHeader($name, $value)
    {
        // TODO: Implement setHeader() method.
    }

    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    public function addCookie(\Http\Cookie $cookie)
    {
        // TODO: Implement addCookie() method.
    }

    public function deleteCookie(\Http\Cookie $cookie)
    {
        // TODO: Implement deleteCookie() method.
    }

    public function setContent($content)
    {
        // TODO: Implement setContent() method.
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
    }

    public function redirect($url)
    {
        // TODO: Implement redirect() method.
    }
}
