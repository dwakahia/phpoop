<?php

require  '../../vendor/autoload.php';

use AbstractPerson\Person;

class EnglishMan extends Person
{

    public function greet()
    {
       echo "Hello dude! \n";
    }
}

$obj = new EnglishMan();
$obj->greet();