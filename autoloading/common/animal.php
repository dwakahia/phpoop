<?php

namespace Common;

class Animal
{

    public function __construct($name)
    {
        $this->name = $name;
    }

    function makeSound($sound)
    {
        echo "The " . $this->name . " is " . $sound ."\n";
    }
}
