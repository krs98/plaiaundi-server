<?php

include "println.php";
include "utils.php";

$arr = [ 
    "monday" => 0, 
    "tuesday" => 1, 
    "wednesday" => 2,
    "thursday" => 3,
    "friday" => 4,
    "saturday" => 5,
    "sunday" => 6
];

print_r($arr);
println("Sum: " . $sum(array_values($arr)));
println("Avg: " . $avg(array_values($arr)));

?>
