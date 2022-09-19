<?php

include "println.php";

print_list(array_map(fn($x) => str_repeat("o", $x), range(1, 10)));

?>
