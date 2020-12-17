<?php

namespace App\Service\Privatbank;

use App\Service\Privatbank\Interfaces\AtmInfrastructureInterface;
use Symfony\Component\HttpClient\Response\CurlResponse;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use App\Model\Privatbank\Atm;

class PrivatAtmManager
{
    /**
     * @var AtmSearchService
     */
    protected $atmSearchService;

    /**
     * PrivatAtmManager constructor.
     * @param AtmSearchService $searchService
     */
    public function __construct(AtmSearchService $searchService)
    {
        $this->atmSearchService = $searchService;
    }

    /**
     * @param AtmInfrastructureInterface $instance
     * @param bool $json
     * @return Atm[]|array
     * @throws Exception\InvalidUrlException
     * @throws TransportExceptionInterface
     * @throws ClientExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     */
    public function getPrivatAtm(AtmInfrastructureInterface $instance, $json = true)
    {
        /** @var CurlResponse $response */
        $response = $this->atmSearchService
            ->isJson($json)
            ->handle($instance)
            ->get();

        if ($response->getStatusCode() == 200) {
            $result = Decoder\PrivatBandAtmDecoder::decode($response->getContent());

            return $result;
        }

        return [];
    }
}