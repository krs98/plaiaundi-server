<?php

include "Espacio.php";

class Aula extends Espacio {
    
    use Getters, Setters;

    public function __construct(
        private int $numero,
        private bool $proyector,
        private bool $pizarraDigital,
        private bool $pantallaTactil
    ) {}

}

