<?php

include "Centro.php";

abstract class Espacio {

    use Getters, Setters;

    protected bool $wifi;
    protected int $redes;
    protected Centro $centro;

    public function __construct(bool $wifi, int $redes, Centro $centro) {
        $this->wifi = $wifi;
        $this->redes = $redes;
        $this->centro = $centro;
    }

}

