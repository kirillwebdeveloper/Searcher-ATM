<?php

namespace App\Service\Privatbank\Decoder;

interface PrivatDecoderInterface
{
    /**
     * @param string $json
     * @return mixed
     */
    public static function decode($json);
}