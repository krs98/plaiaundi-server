<?php

include "println.php";

print_br(array_map(fn($x) => str_repeat("o", $x), range(1, $_GET['lines'])));

?>
