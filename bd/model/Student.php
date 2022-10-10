<?php

include "model/Person.php";

class Student {

    use Getters;

    private $person;
    
    public function __construct(private $id, $person_id, private $enroll_code, private $course, $name, $dni, $email) {
        $this->person = new Person($person_id, $name, $dni, $email);
    }

    public function __toString() {
        return implode(" - ", [
            $this->person->name,
            $this->person->dni,
            $this->person->email,
            $this->enroll_code,
            $this->course 
        ]);
    }

}
