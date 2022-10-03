<?php

include "Ordenador.php";

$pcs = array_map(
    fn($x) => new Ordenador('Arch Linux', "hz$x", false), 
    range(1, 10)
);

foreach ($pcs as $pc)
    echo "$pc\n";

