<?php

namespace App\Model\Privatbank;

use App\Service\Privatbank\Interfaces\AtmInfrastructureInterface;
use Symfony\Component\Validator\Constraints as Assert;

class AtmInfrastructure implements AtmInfrastructureInterface
{
    /**
     * @Assert\NotBlank
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $address;

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     * @return $this
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}