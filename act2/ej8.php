<?php

include "println.php";

$calc = fn($dur) => $dur < 3 ? 10 : 10 + ($dur - 3) * 5;

println($calc(2));
println($calc(20));

?>
