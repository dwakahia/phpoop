<?php

require '../vendor/autoload.php';

use Common\Animal;

class Dog extends Animal
{
    public function bark()
    {
        $this->makeSound("barking");
    }
}

$obj = new Dog("dog");
$obj->bark();
