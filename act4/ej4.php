<?php

$max = fn($arr) => array_reduce($arr, fn($acc, $x) => $x > $acc ? $x : $acc);

$arr = array_map(fn($x) => rand(0, 99), range(1, 10));
echo $max($arr);

?>
