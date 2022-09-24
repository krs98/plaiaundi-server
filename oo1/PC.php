<?php

trait Getters {

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

}

trait Setters {

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }

}

class Centro {

    use Getters, Setters;

    public function __construct(private string $cod, private string $nombre) {}

}

abstract class Espacio {

    use Getters, Setters;

    abstract function __construct(
        protected bool $wifi, 
        protected int $redes,
        protected Centro $centro
    ) {}

}

class Despacho extends Espacio {

    use Getters, Setters;

    public function __construct(private string $nombre) { }

}

class Sobremesa {

    use Getters, Setters;

    public function __construct(private string $so, private string $codHz) { }

}

echo (new Despacho())
