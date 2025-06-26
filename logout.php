<?php
// Inicia o continúa la sesión actual
session_start();

// Destruye toda la información almacenada en la sesión actual
// Esto cierra completamente la sesión del usuario y elimina sus datos (como su nombre, rol, etc.)
session_destroy();

// Redirige al usuario a la página de inicio (en este caso, la pantalla de ingreso)
header("Location: ingresosie.php");

// Finaliza el script para asegurarse de que no se ejecute ningún código adicional
exit();
?>
