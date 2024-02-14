<?php
include("configuracion.php");

// Recibe los datos del formulario
$nombre_difunto = $_POST['nombre_difunto'];
$apellidos_difunto = $_POST['apellidos_difunto'];
$genero_difunto = $_POST['genero_difunto'];
$fecha_nacimiento_difunto = $_POST['fecha_nacimiento_difunto'];
$fecha_defuncion = $_POST['fecha_defuncion'];
$causa_defuncion = $_POST['causa_defuncion'];

// Evita posibles problemas de inyección SQL escapando las variables
$nombre_difunto = mysqli_real_escape_string($mysqli, $nombre_difunto);
$apellidos_difunto = mysqli_real_escape_string($mysqli, $apellidos_difunto);
$genero_difunto = mysqli_real_escape_string($mysqli, $genero_difunto);
$fecha_nacimiento_difunto = mysqli_real_escape_string($mysqli, $fecha_nacimiento_difunto);
$fecha_defuncion = mysqli_real_escape_string($mysqli, $fecha_defuncion);
$causa_defuncion = mysqli_real_escape_string($mysqli, $causa_defuncion);

// Inserta los datos en la tabla de difuntos
$query = "INSERT INTO tb_difunto (nombre_difunto, apellidos_difunto,genero_difunto, fecha_nacimiento_difunto, fecha_defuncion, causa_defuncion) 
          VALUES ('$nombre_difunto', '$apellidos_difunto','$genero_difunto', '$fecha_nacimiento_difunto', '$fecha_defuncion', '$causa_defuncion')";

if(mysqli_query($mysqli, $query)) {
    echo "El difunto se registró correctamente.";
    // Redirige después de mostrar el mensaje de éxito
    echo '<script>window.location="difunto.php";</script>';
} else {
    echo "Error al registrar el difunto: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
