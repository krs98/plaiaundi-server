<?php

include 'utils.php';

$products = array("Prod 1", "Prod 2", "Prod 3", "Prod 4");
$prices = array(10, 4, 2, 6);

?>

<table>

<?php

$sale = 20;

$new_price = fn($x) => $x * (1 - $sale / 100);

// Muestra las filas
echo implode(array_map(
    fn($product, $price) => $tr(
        $td('Product: ' . $product) . 
        $td('Old price: ' . $price) .
        $td('New price: ' . $new_price($price))
    ),
    $products, 
    $prices
));

?>

</table>
