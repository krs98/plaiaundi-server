<?php

require_once('repository/StudentRepository.php');

$id = $_GET['id'];
$name = $_POST['name'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$enroll_code = $_POST['enroll_code'];
$course = $_POST['course'];

$repo = new StudentRepository();
$repo->updateById($id, $name, $dni, $email, $enroll_code, $course);

?>

Usuario actualizado
