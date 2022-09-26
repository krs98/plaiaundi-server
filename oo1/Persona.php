<?php

include "Getters.php";
include "Setters.php";

abstract class Persona {

    use Getters, Setters;

    protected string $name;
    protected string $dni;
    protected string $email;

    public function __construct($name, $dni, $email) {
        $this->name = $name;
        $this->dni = $dni;
        $this->email = $email;
    }
    
}

