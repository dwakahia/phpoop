<?php


require '../../vendor/autoload.php';

use InterfacePerson\Person;

class EnglishMan implements Person
{

    public function greet()
    {
        echo "Hello man !! \n";
    }
}

$obj = new EnglishMan();
$obj->greet();