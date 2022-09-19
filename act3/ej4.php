<?php

$sum = fn($arr) => array_reduce($arr, fn($acc, $x) => $acc + $x);

?>
