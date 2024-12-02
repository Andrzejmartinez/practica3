<?php
session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : "Error desconocido.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p><?php echo $error; ?></p>
    <a href="index.html">Volver</a>
</body>
</html>
