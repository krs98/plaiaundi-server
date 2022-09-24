<?php

include "utils.php";

$get_or_default = function ($field) use ($p) {
    $value = $_POST[$field];
    return $p($value ? "$field: $value" : "$field no indicado");
};

printbr($get_or_default('nombre'));
printbr($get_or_default('apellido'));
printbr($get_or_default('edad'));
printbr($get_or_default('edad'));
printbr($get_or_default('peso'));
printbr($get_or_default('sexo'));
printbr($get_or_default('estado civil'));
printbr($get_or_default('aficiones'));

?>
