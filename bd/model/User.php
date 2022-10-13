<?php

include_once("../utils.php");

class User {
    
    use Getters, Setters;

    public function __construct(private $id, private $username, private $password) {}

}
