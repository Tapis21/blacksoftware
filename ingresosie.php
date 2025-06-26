<?php
// Estas configuraciones son útiles para desarrollo.
// Muestran todos los errores de PHP en la pantalla.
// NO deben estar activas en producción (por razones de seguridad).
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!-- Declaramos el tipo de documento como HTML5 -->
<!DOCTYPE html>
<!-- Definimos el idioma principal del documento como español de Latinoamérica -->
<html lang="es-LA">
<head>
    <!-- Incluimos el archivo head.php, que usualmente contiene:
         - <meta charset>
         - Título de la página
         - Enlaces a hojas de estilo (CSS)
         - Íconos
         Esto permite reutilizar este código en múltiples páginas -->
    <?php include 'componentes/head.php'; ?>
</head>
<body>
    <!-- Envolvemos todo el contenido en un contenedor principal con clases para aplicar estilos flexbox -->
    <div class="main-wrapper d-flex">
        
        <!-- Sección del menú lateral o header fijo -->
        <header>
            <!-- Incluimos el archivo menu.php que contiene el menú de navegación lateral.
                 Esto facilita mantener una sola versión del menú para todo el sitio. -->
            <?php include 'componentes/menu.php'; ?>
        </header>
        
        <!-- Contenido principal de la página -->
        <main class="main-content">
            <div class="content">
                <!-- Incluimos un archivo que contiene la descripción u otro contenido dinámico.
                     Esto podría cambiar según la sección del sitio en la que estemos. -->
                <?php include 'componentes/descripcion.php'; ?>
            </div>
        </main>
        
        <!-- Sección del pie de página -->
        <footer>
            <!-- Incluimos el footer desde un archivo externo.
                 Esto nos ayuda a mantener un diseño consistente en todo el sitio. -->
            <?php include 'componentes/footer.php'; ?>
        </footer>
    </div>

    <!-- Cargamos Bootstrap desde un CDN para agregar interactividad y estilos prediseñados.
         Bootstrap.bundle incluye tanto Bootstrap JS como Popper.js (necesario para algunos componentes) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
            crossorigin="anonymous">
    </script>
</body>
</html>
