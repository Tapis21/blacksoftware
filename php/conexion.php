<?php
// Variables de configuración para la conexión a la base de datos
// Estas son necesarias para establecer la conexión correctamente

$host = "localhost";          // Dirección del servidor de base de datos (localhost significa que está en la misma máquina que el servidor web)
$usuario = "root";            // Nombre de usuario de la base de datos (por defecto en XAMPP o WAMP suele ser "root")
$password = "";               // Contraseña del usuario (vacía por defecto en entornos locales como XAMPP)
$base_datos = "siealumnos";   // Nombre de la base de datos a la que nos queremos conectar

// Crear conexión usando la clase mysqli
// mysqli es una extensión de PHP para trabajar con bases de datos MySQL
$conn = new mysqli($host, $usuario, $password, $base_datos);

// Verificamos si la conexión falló
// Si hay un error, mostramos un mensaje y detenemos la ejecución con die()
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error); // Muestra el error específico
}
?>
<!--
    Este archivo se encarga de establecer la conexión a la base de datos.
    Es importante incluirlo en las páginas que necesiten acceder a la base de datos.
    Asegúrate de que las credenciales sean correctas y que el servidor de base de datos esté funcionando.