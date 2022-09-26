<?php

include "Getters.php";
include "Setters.php";

class Centro {

    use Getters, Setters;

    public function __construct(private string $cod, private string $nombre) {}

}

