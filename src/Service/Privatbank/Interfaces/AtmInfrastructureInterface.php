<?php

namespace App\Service\Privatbank\Interfaces;

interface AtmInfrastructureInterface
{
    public function getCity(): ?string;

    public function getAddress(): ?string;
}