<?php
class Test
{
    function fun1()
    {
        echo "testing fun one \n";
    }
}

class Demo4 extends Test{
    function fun2(){
        echo "testing fun two \n";
    }
}

$obj = new Demo4();
$obj->fun1();
