<!-- menu.php -->
 <!-- Etiqueta <nav> define una barra de navegación -->
<!-- Se utilizan clases de Bootstrap para aplicar estilos prediseñados -->
<!-- 'navbar-expand-lg' permite que el menú se expanda en pantallas grandes y se colapse en pantallas pequeñas -->
<!-- 'navbar-dark' aplica un estilo de texto claro sobre fondo oscuro -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <!-- Contenedor fluido que ocupa el 100% del ancho del padre -->
  <div class="container-fluid">
    <!-- Botón que aparece cuando la pantalla es pequeña (responsive) -->
    <!-- Sirve para mostrar u ocultar el contenido del menú colapsable -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCarreras" aria-controls="menuCarreras" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú lateral fijo (sidebar) personalizado -->
    <!-- 'bg-sie' probablemente sea una clase personalizada para el color de fondo -->
    <!-- 'text-white' pone el texto en color blanco -->
    <!-- 'p-3' es un padding (espaciado interno) de 1rem -->
    <div class="sidebar bg-sie text-white p-3">
      <!-- Título del menú o nombre del sistema -->
      <h4 class="mb-4">SIE</h4>
      <!-- Enlace de navegación que lleva al login -->
      <!-- 'nav-link' es una clase de Bootstrap para estilo de links en menús -->
      <a class="nav-link text-white" href="login.php">Ingresar al SIE</a>
    </div>
  </div>
</nav>
<!-- Bootstrap JS -->