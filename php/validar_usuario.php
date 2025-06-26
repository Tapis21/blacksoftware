<?php
// Inicia la sesión para poder guardar datos del usuario y mantenerlos entre páginas
session_start();

// Incluimos el archivo que contiene la conexión a la base de datos
include 'conexion.php';

// Obtenemos los valores enviados desde el formulario con método POST
$matricula = $_POST['matricula'];  // La matrícula que ingresó el usuario
$clave = $_POST['clave'];          // La contraseña que ingresó el usuario

// Preparamos una consulta SQL segura (evita inyecciones SQL)
// El signo de interrogación ? es un marcador de posición para los valores
$stmt = $conn->prepare("SELECT * FROM alumnos WHERE matricula = ? AND clave = ?");

// Asociamos los valores reales a los marcadores de posición
// "ss" significa que ambos valores son de tipo string (texto)
$stmt->bind_param("ss", $matricula, $clave);

// Ejecutamos la consulta
$stmt->execute();

// Obtenemos el resultado de la consulta
$result = $stmt->get_result();

// Verificamos si se encontró un usuario con esas credenciales
if ($result->num_rows > 0) {
    // Extraemos los datos del usuario en forma de arreglo asociativo
    $usuario = $result->fetch_assoc();

    // Guardamos datos importantes en variables de sesión
    $_SESSION['usuario_id'] = $usuario['id'];             // ID del usuario
    $_SESSION['nombre'] = $usuario['nombre'];             // Nombre del usuario
    $_SESSION['matricula'] = $usuario['matricula'];       // Matrícula del usuario
    $_SESSION['rol'] = $usuario['rol'];                   // Rol del usuario (alumno, docente, admin)
    $_SESSION['carrera'] = $usuario['carrera'];           // Carrera (opcional, si existe en la base)

    // Redirigimos al perfil del usuario si la autenticación fue exitosa
    header("Location: ../perfil.php");
    exit();  // Es importante salir del script después de redirigir
} else {
    // Si no se encontraron resultados, significa que las credenciales son incorrectas
    // Mostramos una alerta en JavaScript y redirigimos de nuevo al login
    echo "<script>alert('Matrícula o contraseña incorrecta'); window.location.href='../login.php';</script>";
}

// Cerramos el statement y la conexión para liberar recursos
$stmt->close();
$conn->close();
?>
