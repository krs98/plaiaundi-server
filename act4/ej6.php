<?php

include "utils.php";

$average = fn($arr) => $sum($arr) / count($arr);

$arr = array_map(fn($x) => rand(0, 99), range(1, 10));
echo $average($arr);

?>
