<?php

include "println.php";

$arr = array(
    ["Name 1", "Last name 1", "Dni 1"], 
    ["Name 2", "Last name 2", "Dni 2"],
    ["Name 3", "Last name 3", "Dni 3"],
    ["Name 4", "Last name 4", "Dni 4"]
);
?>

<table>
<?php
echo implode(array_map(
    fn($person) => '<tr>' . implode(array_map(fn($field) => '<td>' . $field . '</td>', $person)) . '</tr>',
    $arr
));
?>
</table>
