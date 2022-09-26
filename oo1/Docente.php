<?php

include "Persona.php";

class Docente extends Persona {

    use Getters, Setters;

    public function __construct(
        private int $sueldo,
        private Docente $docente
    ) {}
}
