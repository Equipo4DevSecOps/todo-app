<?php
session_start();
require 'config/database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = $db->usuarios->findOne([
    'username' => $username,
    'password' => $password
]);

if ($user) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
} else {
    echo "Credenciales incorrectas";
}
