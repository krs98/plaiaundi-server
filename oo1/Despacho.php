<?php

include "Espacio.php";

class Despacho extends Espacio {

    use Getters, Setters;

    private $ordenadores;

    public function __construct(
        private string $nombre, 
        protected bool $wifi, 
        protected int $redes, 
        protected Centro $centro
    ) {
        $this->ordenadores = [];
    }

    public function addOrdenadores(...$ordenadores) {
        array_push($this, ...$ordenadores);

        return $this;
    }

}

