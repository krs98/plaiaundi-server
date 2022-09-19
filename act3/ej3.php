<?php

include "println.php";

$even = fn($x) => ($x & 0b1) === 0;
$not = fn($pred) => fn($x) => !$pred($x);

$evens = fn($max) => array_filter(range(1, $max), $even);
$odds = fn($max) => array_filter(range(1, $max), $not($even));

$print_xs = function($odd) use ($odds, $evens) {
    $x = rand(1, 99);
    print_list($odd ? $odds($x) : $evens($x));
};

$print_xs(false);

?>
