<!--formato para el footer de todas las paginas-->
<footer class="footer bg-sie text-white text-center py-2" style="height: 60px;">
  <!-- Contenedor de Bootstrap que centra el contenido y mantiene los márgenes adecuados -->
  <div class="container">
    <!-- Párrafo con el texto del footer -->
    <!-- 'mb-0': elimina el margen inferior para que no haya espacio extra debajo del texto.
         'font-size: 14px;': ajusta el tamaño del texto para que sea más pequeño y discreto. -->
    <p class="mb-0" style="font-size: 14px;">Sistema de Integración Estudiantil <!-- Código PHP para mostrar automáticamente el año actual -->
      <!-- La función date("Y") devuelve el año con 4 dígitos, como 2025.
           Esto evita tener que actualizar el año manualmente cada año. --> &copy; <?php echo date("Y"); ?>. Todos los derechos reservados</p>
  </div>
</footer>
<!-- Fin del footer -->