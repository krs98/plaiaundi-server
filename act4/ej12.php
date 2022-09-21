<?php

include "println.php";

$arr = [
    "jordi" => "Jordi Rubio",
    "marta" => "Marta Fabra",
    "eva" => "Eva Palacio",
    "toni" => "Antonio Comas",
    "emilio" => "Emilio Morales",
    "fco" => "Francisco Cascales"
];

println("Por clave");
ksort($arr);
print_r($arr);

println("Por valor");
natsort($arr);
print_r($arr);

?>
