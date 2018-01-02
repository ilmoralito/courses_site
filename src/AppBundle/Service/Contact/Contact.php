<?php

namespace AppBundle\Service\Contact;

class Contact
{
    public function getContactInformation()
    {
        return [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@ucc.edu.ni',
                'telephoneNumber' => '+(505) 2311 0812 Ext. 105'
            ],[
                'name' => 'Jahne Doe',
                'email' => 'jahne.doe@ucc.edu.ni',
                'telephoneNumber' => '+(505) 2311 0812 Ext. 105'
            ],[
                'name' => 'Johan Doe',
                'email' => 'johan.doe@ucc.edu.ni',
                'telephoneNumber' => '+(505) 2311 0812 Ext. 105'
            ]
        ];
    }
}