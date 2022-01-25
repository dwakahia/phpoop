<?php


class Demo
{
    private $a= "hello my people \n";
    public function display()
    {
        echo $this->a;
    }
}

$obj = new Demo();
$obj->display();
