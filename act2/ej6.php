<?php

include "println.php";

$x = 5;
$y = 5;

println($x * $y < $x + $y 
    ? 'la suma es mayor que el producto' 
    : 'el producto es mayor que la suma'
);

?>
