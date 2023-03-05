<?php

namespace App\Tests\Unit\Controllers;

use \Http\Request as IRequest;

class Request implements IRequest
{

    protected array $data = [
        'data' => 'test'
    ];

    public function getParameter($key, $defaultValue = null): int|string|null
    {
        return $this->data[$key] ?? $defaultValue;
    }

    public function getQueryParameter(string $key, $defaultValue = null): string|int|null
    {
        return null;
    }

    public function getBodyParameter(string $key, $defaultValue = null): string|int|null
    {
        return null;
    }

    public function getFile(string $key, $defaultValue = null): string|null
    {
        return null;
    }

    public function getCookie(string $key, $defaultValue = null): string|int|null
    {
        return null;
    }

    public function getParameters(): array
    {
        return [];
    }

    public function getQueryParameters(): array
    {
        return [];
    }

    public function getBodyParameters(): array
    {
        return [];
    }

    public function getRawBody(): string
    {
        return "";
    }

    public function getCookies(): array
    {
        return [];
    }

    public function getFiles(): array
    {
        return [];
    }

    public function getUri(): string
    {
        return "";
    }

    public function getPath(): string
    {
        return "";
    }

    public function getMethod(): string
    {
        return "";
    }

    public function getHttpAccept(): string
    {
        return "";
    }

    public function getReferer(): string
    {
        return "";
    }

    public function getUserAgent(): string
    {
        return "";
    }

    public function getIpAddress(): string
    {
        return "";
    }

    public function isSecure(): bool
    {
        return false;
    }

    public function getQueryString(): string
    {
        return "";
    }
}
