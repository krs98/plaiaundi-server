<?php

include "Despacho.php";

class Ordenador {

    use Getters, Setters;

    private Despacho $despacho;

    public function __construct(private string $so, private string $codHz) { }

}

