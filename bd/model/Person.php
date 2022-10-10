<?php

class Person {

    use Getters;

    public function __construct(private $id, private $name, private $dni, private $email) {}

}
