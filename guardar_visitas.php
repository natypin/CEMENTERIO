<?php
include("configuracion.php");

// Recibe los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$relacion_difunto = $_POST['relacion_difunto'];
$fecha_visita = $_POST['fecha_visita'];
$hora_ingreso = $_POST['hora_ingreso'];

// Evita posibles problemas de inyección SQL escapando las variables
$nombre = mysqli_real_escape_string($mysqli, $nombre);
$apellido = mysqli_real_escape_string($mysqli, $apellido);
$relacion_difunto = mysqli_real_escape_string($mysqli, $relacion_difunto);
$fecha_visita = mysqli_real_escape_string($mysqli, $fecha_visita);
$hora_ingreso = mysqli_real_escape_string($mysqli, $hora_ingreso);

// Inserta los datos en la tabla de visitas
$query = "INSERT INTO tb_persona INNER JOIN tb_visitas (nombre, apellido, relacion_difunto, fecha_visita, hora_ingreso) 
          VALUES ('$nombre', '$apellido', '$relacion_difunto', '$fecha_visita', '$hora_ingreso')";

if(mysqli_query($mysqli, $query)) {
    echo "El visitante se registró correctamente.";
    // Redirige después de mostrar el mensaje de éxito
    echo '<script>window.location="visitas.php";</script>';
} else {
    echo "Error al registrar el visitante: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
