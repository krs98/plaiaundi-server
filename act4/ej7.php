<?php

include "println.php";

$arr = array_map(fn($arr) => rand(1, 200), range(1, 10));

printbr("Relacion de numeros aleatorios");
print_list($arr);
printbr();

printbr("Otra forma");
print_r($arr);
printbr();

printbr("Invertido");
print_list(array_reverse($arr));

?>
