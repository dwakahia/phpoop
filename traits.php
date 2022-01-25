<?php

trait Talk {

    public function speak($phrase) {
        echo $phrase;
    }
}

class Demo3{
    use Talk;

    public function talk(){
        $this->speak("i am using a trait \n");
    }
}

$obj = new Demo3();
$obj->talk();