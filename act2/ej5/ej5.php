<!doctype html>
<html>
<body>
    <form method="GET">
        <input name="x">
    </form>
</body>
</html>

<?php

include "ej5.php";

$x = $_GET["x"];
println(($x & 0b1) ? 'odd' : 'even');

?>
