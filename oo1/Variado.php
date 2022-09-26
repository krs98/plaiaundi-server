<?php

include "Espacio.php";

class Variado extends Espacio {

    use Getters, Setters;

    public function __construct(
        private string $tipo
    ) {}
}

