<?php

# Misma implementacion que `array_filter`, pero con un orden de
# argumentos consistente al resto de funciones similares.
function filter($pred, $arr) {
    return array_filter($arr, $pred);
}

function find($pred, $arr) {
    foreach ($arr as $value) {
        if ($pred($value)) {
            return $value;
        }
    }

    return false;
}
