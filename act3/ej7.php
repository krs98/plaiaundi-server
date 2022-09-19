<?php

include "println.php";

println(array_reduce(range($_GET['min'], $_GET['max']), fn($acc, $x) => $acc + $x));

?>
