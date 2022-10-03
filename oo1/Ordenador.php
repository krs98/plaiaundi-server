<?php

include "Getters.php";
include "Setters.php";

class Ordenador {

    use Getters, Setters;

    public function __construct(
        private string $so, 
        private string $codHz,
        private bool $esSobremesa,
    ) { }

    public function __toString() {
        $so = $this->so;
        $codHz = $this->codHz;
        $sobremesa = $this->esSobremesa ? 'true': 'false';
        return "Ordenador { so: $so, hz: $codHz, sobremesa: $sobremesa }";
    }

    public function hasCode($code) {
        return $this->codHz === $code;
    }

}

