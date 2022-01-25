<?php

class Student {
    private $firstname;
    private $gender;

    public function getFirstName() {
        return $this->firstname;
    }

    public function setFirstName($firstname) {
        $this->firstname = $firstname;
        echo("First name is set to ".$firstname ."\n");
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        if ('Male' !== $gender and 'Female' !== $gender) {
            echo("Set gender as Male or Female for gender \n");
        }

        $this->gender = $gender;
        echo("Gender is set to ".$gender."\n");
    }
}

$student = new Student();
$student->setFirstName('John Doe');
$student->setGender('Male');


