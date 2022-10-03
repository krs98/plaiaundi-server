<table>

<?php

include "Ordenador.php";

$pcs = array_map(
    fn($x) => new Ordenador('Arch Linux', "hz$x", false), 
    range(1, 10)
);

function displayPc($pc) {
    $os = $pc->so;
    $hz = $pc->codHz;
    $sobremesa = $pc->esSobremesa ? 'true' : 'false';
    echo "<tr><td>$os</td><td>$hz</td><td>$sobremesa</td></tr>";
}

foreach ($pcs as $pc) displayPc($pc);

?>

</table>
