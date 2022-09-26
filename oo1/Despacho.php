<?php

include "Espacio.php";

class Despacho extends Espacio {

    use Getters, Setters;

    public function __construct(
        private string $nombre, 
        private Ordenador $ordenador, 
        protected bool $wifi, 
        protected int $redes, 
        protected Centro $centro
    ) {
        $ordenador->despacho = $this;
    }

}

