<?php
require_once 'Usuari.php';

$name = $_POST['nombre'];
$surname = $_POST['apellidos'];
$alias = $_POST['alias'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = new Usuari();
if ($user->addUser($name, $surname, $alias, $email, $password)) {
    header("Location: ../capa_presentacion/index.html");
} else {
    $_SESSION['error'] = "Error al registrarse.";
    header("Location: ../capa_presentacion/error.php");
}
?>
