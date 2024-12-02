<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['user_alias'])) {
    // Redirige a la página de error si no hay sesión activa
    $_SESSION['error'] = "Debes iniciar sesión para acceder al dashboard.";
    header("Location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Header Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Notas Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Notas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Audios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Compartido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Papelera</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-circle" data-bs-toggle="dropdown">
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Tu perfil</a></li>
                        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="text-center mb-5">
            <button class="btn btn-primary btn-lg shadow-sm">Añadir Nota</button>
        </div>

        <h2 class="fw-bold mb-4 text-center">Tus Notas</h2>
        <h5 class="text-secondary text-center mb-4">Recientes</h5>

        <!-- Notas Grid -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Nota -->
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title fw-bold">Título de la nota</h5>
                            <div class="dropdown">
                                <span class="text-secondary fs-5" data-bs-toggle="dropdown" style="cursor: pointer;">&#x2026;</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Borrar</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="card-text text-secondary">Texto del cuerpo de la nota. Este es un breve resumen.</p>
                    </div>
                </div>
            </div>
            <!-- Repite las tarjetas para más notas -->
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title fw-bold">Título de la nota</h5>
                            <div class="dropdown">
                                <span class="text-secondary fs-5" data-bs-toggle="dropdown" style="cursor: pointer;">&#x2026;</span>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                    <li><a class="dropdown-item" href="#">Borrar</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="card-text text-secondary">Texto del cuerpo de la nota. Este es un breve resumen.</p>
                    </div>
                </div>
            </div>
            <!-- Más tarjetas aquí -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">© 2024 Notas Web. Todos los derechos reservados.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#" class="text-white">UX Design</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Wireframing</a></li>
                <li class="list-inline-item"><a href="#" class="text-white">Colaboración</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

