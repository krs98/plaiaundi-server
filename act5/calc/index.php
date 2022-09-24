<form method="GET">

    <div>
        <label>x</label>
        <input 
            type="number" 
            name="x"
            value="<?php echo isset($_GET['x']) ? "$_GET[x]" : ''; ?>"
        >
    </div>

    <div>
        <label>y</label>
        <input 
            type="number" 
            name="y"
            value="<?php echo isset($_GET['y']) ? "$_GET[y]" : ''; ?>"
        >
    </div>

    <input type="submit" name="op" value="Add">
    <input type="submit" name="op" value="Sub">
    <input type="submit" name="op" value="Mult">
    <input type="submit" name="op" value="Div">

</form>

<?php

    $x = $_GET['x'];
    $y = $_GET['y'];
    $op = $_GET['op'];

    # El tipo de input `number` impide que la entrada sea cualquier otra que un
    # numero entero.

    echo match($op) {
        'Add' => $x + $y,
        'Sub' => $x - $y,
        'Mult' => $x * $y,
        'Div' => $x / $y
    };
    
?>

