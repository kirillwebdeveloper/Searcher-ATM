<?php

namespace App\Service\Privatbank\Exception;

class InvalidUrlException extends \Exception
{
    public function __construct()
    {
        parent::__construct('Invalid Url', 500);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}