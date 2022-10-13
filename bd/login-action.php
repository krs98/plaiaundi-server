<?php

require_once("repository/UserRepository.php");
require_once("../utils.php");

$repo = new UserRepository();

$username = $_GET['username'];
$password = $_GET['password'];

$user = $repo->getByUsername($username);
if (!$user) {
    echo "User not found!\n";
} elseif ($user->password === $password) {
    session_start();
    $_SESSION['username'] = $user->username;
    redirect("index.php");
} else {
    echo "Invalid password!\n";
}
