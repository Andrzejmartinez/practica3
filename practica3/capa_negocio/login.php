<?php
require_once 'Usuari.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$user = new Usuari();
$alias = $user->isValidUser($email, $password);

if ($alias) {
    $_SESSION['user_alias'] = $alias;
    header("Location: ../capa_presentacion/dashboard.php");
} else {
    $_SESSION['error'] = "Credenciales incorrectas.";
    header("Location: ../capa_presentacion/error.php");
}
?>
