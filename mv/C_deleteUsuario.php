<?php

use Model\M_Usuario;
use Model\Usuario;
require_once 'Model/Usuario.php';
require_once 'Model/M_Usuario.php';

$username = $_POST['username'];

$con = new M_Usuario();

$usuario = new Usuario($username, $password, $nombre);

$con->deleteUsuario($usuario);
$con->close();

header("Location: C_verUsuarios.php");
exit();
?>
