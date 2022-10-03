<?php

include "Espacio.php";
include "Ordenador.php";

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

    public function addOrdenador($ordenador) {
        if (count($this->ordenadores) > $this->redes) {
            $cod = $ordenador->codHz;
            echo "No se pudo añadir el ordenador con codigo $cod: puntos de red insuficientes\n";
        } else {
            array_push($this->ordenadores, $ordenador);
        }
    }

    public function addOrdenadores($ordenadores) {
        foreach ($ordenadores as $ordenador)
            $this->addOrdenador($ordenador);
            
        return $this;
    }

}

$desp = new Despacho("name", true, 10, new Centro('', ''));
$ords = array_map(fn($x) => new Ordenador('x', "HZ$x", false), range(1, 20));
$desp->addOrdenadores($ords);
