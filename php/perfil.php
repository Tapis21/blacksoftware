<!-- perfil.php -->
<?php
$carrera = $_GET['carrera'] ?? 'ninguna';

switch ($carrera) {
    case 'admin':
        include('login_admin.php');
        break;
    case 'biotec':
        include('login_biotec.php');
        break;
    case 'biomed':
        include('login_biomed.php');
        break;
    case 'soft':
        include('login_soft.php');
        break;
    case 'finan':
        include('login_finan.php');
        break;
    case 'terapia':
        include('login_terapia.php');
        break;
    default:
        echo "<p>Carrera no válida o no seleccionada.</p>";
}
?>
