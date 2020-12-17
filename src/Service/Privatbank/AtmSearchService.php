<?php

namespace App\Service\Privatbank;

use App\Service\Privatbank\Interfaces\AtmInfrastructureInterface;

class AtmSearchService extends AbstractSearch
{
    /**
     * @var boolean
     */
    private $isJson = true;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @param AtmInfrastructureInterface $instance
     * @return $this
     */
    public function handle(AtmInfrastructureInterface $instance): self
    {
        $this->city    = $instance->getCity();
        $this->address = $instance->getAddress();

        return $this;
    }

    /**
     * @param bool $isJson
     * @return $this
     */
    public function isJson(bool $isJson): self
    {
        $this->isJson = $isJson;

        return $this;
    }

    /**
     * @return array
     */
    protected function getParameterBag(): array
    {
        $parameterBag = [];

        if ($this->isJson) {
            $parameterBag['json'] = '';
        }

        $parameterBag['atm']     =  '';
        $parameterBag['address'] =  $this->address;
        $parameterBag['city']    =  $this->city;

        return $parameterBag;
    }

    protected function getMethod(): string
    {
        return 'GET';
    }

    protected function getApiUrl(): string
    {
        return 'https://api.privatbank.ua/p24api/infrastructure';
    }
}