<?php

include "println.php";

$arr = array_map(fn($x) => rand(0, 49), range(1, 50));

$addToTable = function($table, $x) {
    if (isset($table[$x]))
        $table[$x] += 1;
    else 
        $table[$x] = 1;

    return $table;
};

$table = array_reduce($arr, $addToTable, []);

$showCount = function($value, $key) {
    println("El numero $key ha salido $value veces.");
};

array_walk($table, $showCount);

?>
