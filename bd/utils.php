<?php

function isEmpty($arr) {
    return count($arr) === 0;
}

function map($fn, $arr) {
    return array_map($fn, $arr);
}

function makeTag($tag) {
    return fn($elm) => '<' . $tag . '>' . $elm . '</' . $tag . '>';
}

$p = makeTag('p');
$li = makeTag('li');
