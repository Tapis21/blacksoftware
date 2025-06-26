<!-- Indica al navegador que el documento está en formato HTML5 -->
<!DOCTYPE html>

<!-- Especifica el idioma del contenido de la página (Español Latinoamérica) -->
<html lang="es-LA">
<head>
    <!-- Codificación de caracteres, asegura que los acentos y símbolos se vean correctamente -->
    <meta charset="UTF-8">

    <!-- Hace que la página sea adaptable a celulares y tabletas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título que aparece en la pestaña del navegador -->
    <title>SIE Ingenieria en Software</title>
    
    <!-- Enlace al archivo CSS personalizado para el estilo del login -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    
    <!-- Encabezado principal de la página -->
    <header>
        <h1>SIE</h1>         <!-- Nombre del sistema -->
        <h2>Inicio de sesión</h2>  <!-- Subtítulo indicando la función de esta página -->
    </header>

    <!-- Sección principal del contenido -->
    <main>
        <!-- Caja que contiene el formulario de login -->
        <section class="login-box">

            <!-- Imagen del logo del sistema -->
            <img src="img/logo.png" alt="Logo del Sistema de Información Estudiantil" class="logo">

            <!-- Formulario de inicio de sesión -->
            <!-- El atributo 'action' indica a qué archivo se enviarán los datos -->
            <!-- El atributo 'method="post"' envía los datos de forma segura (oculta en la URL) -->
            <form id="formularioLogin" action="php/validar_usuario.php" method="post">

                <!-- Etiqueta y campo para ingresar la matrícula -->
                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" placeholder="matrícula" required>
                <!-- 'required' hace que el campo sea obligatorio -->

                <!-- Etiqueta y campo para ingresar la contraseña -->
                <label for="clave">Contraseña:</label>
                <input type="password" id="clave" name="clave" placeholder="contraseña" required>
                <!-- El tipo 'password' oculta los caracteres ingresados -->

                <!-- Botón para enviar el formulario -->
                <button type="submit">Ingresar</button>
            </form>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <!-- Incluimos el footer externo para mantener consistencia con el resto del sitio -->
        <?php include 'componentes/footer.php'; ?>
    </footer>
</body>
</html>

