<?php

include "println.php";

$even = fn($x) => ($x & 0b1) === 0;
print_list(array_filter(range(1, 100), $even));

?>
