<?php

include "utils.php";

$arr = array(
    ["Name 1", "Last name 1", "Dni 1"], 
    ["Name 2", "Last name 2", "Dni 2"],
    ["Name 3", "Last name 3", "Dni 3"],
    ["Name 4", "Last name 4", "Dni 4"]
);

$assoc = array_map(
    fn($person) => array("name" => $person[0], "last" => $person[1], "dni" => $person[2]),
    $arr
);

?>

<table>
<?php

echo implode(array_map(
    fn($person) => $tr(
        $td($person["name"]) .
        $td($person["last"]) .
        $td($person["dni"])
    ),
    $assoc
));

?>
</table>
