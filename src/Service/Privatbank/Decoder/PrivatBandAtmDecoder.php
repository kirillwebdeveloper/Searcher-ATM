<?php

namespace App\Service\Privatbank\Decoder;

use App\Model\Privatbank\Atm;
use App\Model\Privatbank\AtmSchedule;

class PrivatBandAtmDecoder implements PrivatDecoderInterface
{
    /**
     * @param string $json
     * @return Atm[]
     */
    public static function decode($json)
    {
        $instance = json_decode($json, true);

        $result = [];

        foreach ($instance['devices'] as $device) {
            $result[] = (new Atm())
                ->setType($device['type'])
                ->setLatitude($device['latitude'])
                ->setLongitude($device['longitude'])
                ->setFullAddressRu($device['fullAddressRu'])
                ->setFullAddressUa($device['fullAddressUa'])
                ->setFullAddressRu($device['fullAddressEn'])
                ->setPlaceRu($device['placeRu'])
                ->setPlaceUa($device['placeUa'])
                ->setCityRU($device['cityRU'])
                ->setCityUA($device['cityUA'])
                ->setCityEN($device['cityEN'])
                ->setTw(
                    (new AtmSchedule())
                        ->setMon($device['tw']['mon'])
                        ->setTue($device['tw']['tue'])
                        ->setWed($device['tw']['wed'])
                        ->setThu($device['tw']['thu'])
                        ->setFri($device['tw']['fri'])
                        ->setSat($device['tw']['sat'])
                        ->setSun($device['tw']['sun'])
                        ->setHol($device['tw']['hol'])
                );
        }

        return $result;
    }
}