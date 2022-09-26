<?php

include "Persona.php";

class Alumno extends Persona {

    use Getters, Setters;

    public function __construct(
        private string $codMatricula, 
        private string $ciclo,
        protected string $name,
        protected string $dni,
        protected string $email
    ) {}

}

