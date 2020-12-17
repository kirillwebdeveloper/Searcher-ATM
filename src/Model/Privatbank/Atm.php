<?php

namespace App\Model\Privatbank;

class Atm
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $latitude;

    /**
     * @var string
     */
    protected $longitude;

    /**
     * @var string
     */
    protected $fullAddressRu;

    /**
     * @var string
     */
    protected $fullAddressUa;

    /**
     * @var string
     */
    protected $placeRu;

    /**
     * @var string
     */
    protected $placeUa;

    /**
     * @var string
     */
    protected $cityRU;

    /**
     * @var string
     */
    protected $cityUA;

    /**
     * @var string
     */
    protected $cityEN;

    /**
     * @var AtmSchedule
     */
    protected $tw;

    /**
     * @return AtmSchedule
     */
    public function getTw()
    {
        return $this->tw;
    }

    /**
     * @param AtmSchedule $tw
     * @return $this
     */
    public function setTw(?AtmSchedule $tw): self
    {
        $this->tw = $tw;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return $this
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return $this
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddressRu()
    {
        return $this->fullAddressRu;
    }

    /**
     * @param string $fullAddressRu
     * @return $this
     */
    public function setFullAddressRu(?string $fullAddressRu): self
    {
        $this->fullAddressRu = $fullAddressRu;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullAddressUa()
    {
        return $this->fullAddressUa;
    }

    /**
     * @param string $fullAddressUa
     * @return $this
     */
    public function setFullAddressUa(?string $fullAddressUa): self
    {
        $this->fullAddressUa = $fullAddressUa;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceRu()
    {
        return $this->placeRu;
    }

    /**
     * @param string $placeRu
     * @return $this
     */
    public function setPlaceRu(?string $placeRu): self
    {
        $this->placeRu = $placeRu;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceUa()
    {
        return $this->placeUa;
    }

    /**
     * @param string $placeUa
     * @return $this
     */
    public function setPlaceUa(?string $placeUa): self
    {
        $this->placeUa = $placeUa;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityRU()
    {
        return $this->cityRU;
    }

    /**
     * @param string $cityRU
     * @return $this
     */
    public function setCityRU(?string $cityRU): self
    {
        $this->cityRU = $cityRU;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityUA()
    {
        return $this->cityUA;
    }

    /**
     * @param string $cityUA
     * @return $this
     */
    public function setCityUA(?string $cityUA): self
    {
        $this->cityUA = $cityUA;

        return $this;
    }

    /**
     * @return string
     */
    public function getCityEN()
    {
        return $this->cityEN;
    }

    /**
     * @param string $cityEN
     * @return $this
     */
    public function setCityEN(?string $cityEN): self
    {
        $this->cityEN = $cityEN;

        return $this;
    }
}