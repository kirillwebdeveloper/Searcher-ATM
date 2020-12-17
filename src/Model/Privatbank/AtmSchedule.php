<?php

namespace App\Model\Privatbank;

class AtmSchedule
{
    /**
     * @var string
     */
    protected $mon;

        /**
     * @var string
     */
    protected $tue;

        /**
     * @var string
     */
    protected $wed;

        /**
     * @var string
     */
    protected $thu;

        /**
     * @var string
     */
    protected $fri;

        /**
     * @var string
     */
    protected $sat;

        /**
     * @var string
     */
    protected $sun;

        /**
     * @var string
     */
    protected $hol;

    /**
     * @return string
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * @param string $mon
     * @return $this
     */
    public function setMon(?string $mon): self
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * @return string
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * @param string $tue
     * @return $this
     */
    public function setTue(?string $tue): self
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWed()
    {
        return $this->wed;
    }

    /**
     * @param string $wed
     * @return $this
     */
    public function setWed(?string $wed): self
    {
        $this->wed = $wed;

        return $this;
    }

    /**
     * @return string
     */
    public function getThu()
    {
        return $this->thu;
    }

    /**
     * @param string $thu
     * @return $this
     */
    public function setThu(?string $thu): self
    {
        $this->thu = $thu;

        return $this;
    }

    /**
     * @return string
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * @param string $fri
     * @return $this
     */
    public function setFri(?string $fri): self
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * @return string
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * @param string $sat
     * @return $this
     */
    public function setSat(?string $sat): self
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * @return string
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * @param string $sun
     * @return $this
     */
    public function setSun(?string $sun): self
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * @return string
     */
    public function getHol()
    {
        return $this->hol;
    }

    /**
     * @param $hol
     * @return $this
     */
    public function setHol(?string $hol): self
    {
        $this->hol = $hol;

        return $this;
    }
}