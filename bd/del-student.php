<?php

require_once('repository/StudentRepository.php');
include_once("../student.php");

checkSession('username', fn() => redirect('login.php'));

$id = $_GET['id'];

$repo = new StudentRepository();
$repo->deleteById($id);

?>

Usuario eliminado
