<?php

$arr = array_map(fn($x) => rand(0, 99), range(1, 10));
echo min($arr);

?>
