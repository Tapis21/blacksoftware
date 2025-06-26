<?php
// Inicia o continúa la sesión actual para acceder a los datos del usuario
session_start();

// Verifica si el usuario está autenticado
// Si no hay un ID de usuario en la sesión, redirige al login
if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../login.php");
    exit();
}

// Extraemos datos importantes desde la sesión para mostrarlos en pantalla
$nombre = $_SESSION['nombre'];
$rol = $_SESSION['rol'];
?>

<!-- Estructura del HTML -->
<!DOCTYPE html>
<html lang="es-LA">
<head>
    <!-- Configuración básica del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>

    <!-- Enlace a la hoja de estilos personalizada para esta página -->
    <link rel="stylesheet" href="css/perfil.css"> <!-- Asegúrate de que este archivo exista -->
</head>
<body>

    <!-- Encabezado con el nombre del sistema y título de la sección -->
    <header>
        <h1>SIE</h1>
        <p>Perfil del Usuario</p>
    </header>

    <!-- Contenido principal -->
    <main>
        <!-- Sección de bienvenida personalizada -->
        <section class="bienvenida">
            <!-- Muestra el nombre del usuario (protegido con htmlspecialchars para evitar inyección HTML) -->
            <h2>Bienvenido(a), <?php echo htmlspecialchars($nombre); ?></h2>

            <!-- Muestra paneles según el rol del usuario -->
            <?php if ($rol === 'alumno'): ?>
                <p>Panel del Alumno</p>
                <a href="cursos.php">Mis Cursos</a>
                <a href="calificaciones.php">Mis Calificaciones</a>

            <?php elseif ($rol === 'docente'): ?>
                <p>Panel del Docente</p>
                <a href="grupos.php">Mis Grupos</a>
                <a href="evaluaciones.php">Evaluaciones</a>

            <?php elseif ($rol === 'admin'): ?>
                <p>Panel del Administrador</p>
                <a href="usuarios.php">Gestión de Usuarios</a>
                <a href="reportes.php">Reportes Generales</a>

            <?php else: ?>
                <p>Rol no reconocido.</p> <!-- En caso de que el rol no sea válido o no esté definido -->
            <?php endif; ?>
        </section>

        <!-- Enlace para cerrar sesión -->
        <div class="cerrar-sesion">
            <a href="logout.php">Cerrar sesión</a>
        </div>
    </main>

    <!-- Sección del pie de página -->
        <footer>
            <!-- Incluimos el footer desde un archivo externo.
                 Esto nos ayuda a mantener un diseño consistente en todo el sitio. -->
            <?php include 'componentes/footer.php'; ?>
        </footer>

</body>
</html>
