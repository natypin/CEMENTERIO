<?php
include("configuracion.php");

// Recibe los datos del formulario
$ubicacion_tumba = $_POST['ubicacion_tumba'];
$fecha_hora_inhumacion = $_POST['fecha_hora_inhumacion'];
$descripcion_inhumacion = $_POST['descripcion_inhumacion'];

// Evita posibles problemas de inyección SQL escapando las variables
$ubicacion_tumba = mysqli_real_escape_string($mysqli, $ubicacion_tumba);
$fecha_hora_inhumacion = mysqli_real_escape_string($mysqli, $fecha_hora_inhumacion);
$descripcion_inhumacion = mysqli_real_escape_string($mysqli, $descripcion_inhumacion);

// Inserta los datos en la tabla de inhumación
$query = "INSERT INTO tb_inhumacion (ubicacion_tumba, fecha_hora_inhumacion, descripcion_inhumacion) 
          VALUES ('$ubicacion_tumba', '$fecha_hora_inhumacion', '$descripcion_inhumacion')";

if(mysqli_query($mysqli, $query)) {
    echo "La inhumación se registró correctamente.";
    // Redirige después de mostrar el mensaje de éxito
    echo '<script>window.location="inhumacion.php";</script>';
} else {
    echo "Error al registrar la inhumación: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
