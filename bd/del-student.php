<?php

require_once('repository/StudentRepository.php');

$id = $_GET['id'];

$repo = new StudentRepository();
$repo->deleteById($id);

?>

Usuario eliminado
