<?php

$user = $_POST['username'];
$password = $_POST['password'];
$prehashed = password_hash('123456', PASSWORD_BCRYPT);

if (password_verify($password, $prehashed)) echo 'Login correcto';
else header('Location: ' . 'index.php?invalid=true');

?>
