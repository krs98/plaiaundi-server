<?php

include "Ordenador.php";
include "utils.php";

$option = $_POST['option'];
switch ($option) {

case 'save': createEntry(); break;
case 'delete': deleteEntry(); break;

}

function createEntry() {
    $os = $_POST['os'];
    $hz = $_POST['hz'];
    $sobremesa = isset($_POST['sobremesa']);
    echo $sobremesa;
    $pcs = read_serialized('file.txt');

    $existingPc = find(fn($pc) => $pc->hasCode($hz), $pcs);
    $otherPcs = filter(fn($pc) => !$pc->hasCode($hz), $pcs);

    array_push(
        $otherPcs, 
        $existingPc
            ? updatePc($existingPc, $os, $sobremesa) 
            : new Ordenador($os, $hz, $sobremesa)
    );

    file_put_contents(
        'file.txt',
        implode("\n", array_map(fn($pc) => serialize($pc), $otherPcs))
    );
}

function deleteEntry() {
    $hz = $_POST['hz'];

    $pcs = read_serialized('file.txt');
    $otherPcs = filter(fn($pc) => !$pc->hasCode($hz), $pcs);

    file_put_contents(
        'file.txt',
        implode("\n", array_map(fn($pc) => serialize($pc), $otherPcs))
    );
}

function updatePc($pc, $os, $sobremesa) {
    $pc->so = $os;
    $pc->esSobremesa = $sobremesa;

    return $pc;
}

function read_serialized($file) {
    $file = file($file);
    return array_map(fn($line) => unserialize($line), $file ? $file : []);
}
