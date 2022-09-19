<?php

include "println.php";

$x = 0;

if ($x >= 9) {
    println('Sobresaliente');
} elseif ($x >= 7) {
    println('mu bien');
} elseif ($x >= 6) {
    println('bien');
} elseif ($x >= 5) {
    println('suficiente');
} elseif ($x >= 1) {
    println('suspenso');
} else {
    throw new Exception('Nota no valida');
}

?>
