<?php

namespace App\Service\Privatbank;

use App\Service\Privatbank\Exception\InvalidUrlException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\ResponseInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

abstract class AbstractSearch
{
    /**
     * Parameters
     *
     * @return array
     */
    abstract protected function getParameterBag(): array;

    /**
     * Method (POST|GET)
     *
     * @return string
     */
    abstract protected function getMethod(): string;

    /**
     * URL
     *
     * @return string
     */
    abstract protected function getApiUrl(): string;

    /**
     * @return string
     * @throws InvalidUrlException
     */
    private function createUrlFromBag()
    {
        $apiUrl = trim($this->getApiUrl(), " \t\n\r\0\x0B\?");

        if (strpos($apiUrl, '?') !== false) {
            throw new InvalidUrlException();
        }

        $apiUrl .= '?';

        foreach ($this->getParameterBag() as $requestName => $value) {
            $apiUrl .= empty($value) && $requestName != 'address'
                ? urlencode($requestName). '&'
                : urlencode($requestName) . '=' . urlencode($value) . '&'
            ;
        }

        return rtrim($apiUrl, "&");
    }

    /**
     * @return ResponseInterface
     * @throws InvalidUrlException
     * @throws TransportExceptionInterface
     */
    public function get()
    {
        return HttpClient::create()
            ->request($this->getMethod(), $this->createUrlFromBag());
    }
}