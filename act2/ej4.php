<?php

include "println.php";

$arr = array("x", "z", "y");

sort($arr);
println(implode(", ", $arr));

rsort($arr);
println(implode(", ", $arr));

?>
