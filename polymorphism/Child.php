<?php

use PolyMorphism\Base;

class Child extends Base
{
    function add($a, $b, $c)

    {

        $res = $a + $b + $c;

        echo "Sum of three number = " . $res;

    }
}

$obj= new child();

//displays error as it expects 3 arguments due to overriding of the parent class which requires

$obj->add(1000,500);