<?php

$tr = fn($x) => '<tr>' . $x . '</tr>';
$td = fn($x) => '<td>' . $x . '</td>';

$sum = fn($arr) => array_reduce($arr, fn($acc, $x) => $acc + $x);
$avg = fn($arr) => $sum($arr) / count($arr);

?>
