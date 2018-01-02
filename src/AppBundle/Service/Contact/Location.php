<?php

namespace AppBundle\Service\Contact;

class Location
{
    public function getLocation()
    {
        return [
            'place' => 'UCC Campus Leon',
            'address' => 'Frente al campus medico',
            'telephoneNumbers' => [
                '+(505) 2311 0812',
                '+(505) 2311 0811',
            ]
        ];
    }
}