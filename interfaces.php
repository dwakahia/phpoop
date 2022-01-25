<?php

interface  a {
    public function fun1();
}

interface  b {
    public function fun2();
}

class Demo2 implements a ,b{

    public function fun1()
    {
        echo "method one \n";
    }

    public function fun2()
    {
        echo "method two \n";
    }
}

$obj = new Demo2();
$obj->fun1();
$obj->fun2();