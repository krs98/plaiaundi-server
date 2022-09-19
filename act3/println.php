<?php

function println($str) {
    echo $str . PHP_EOL;
}

function print_list($arr) {
    println(implode(PHP_EOL, $arr));
}

function print_br($arr) {
    println(implode('<br>', $arr));
}
