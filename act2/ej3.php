<?php

include "println.php";

$PI = 3.14;
$r = 5;

function perimeter($r) {
    global $PI;
    return 2 * $PI * $r;
}

function area($r) {
    global $PI;
    return $PI * $r ** 2;
}

println(perimeter($r));
println(area($r));

?>
