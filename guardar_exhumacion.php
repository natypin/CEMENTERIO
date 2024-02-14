<?php
include("configuracion.php");

// Recibe los datos del formulario
$motivo = $_POST['motivo'];
$fecha_hora_exhumacion = $_POST['fecha_hora_exhumacion'];
$destino_restos = $_POST['destino_restos'];
$descripcion_exhumacion = $_POST['descripcion_exhumacion'];

// Evita posibles problemas de inyección SQL escapando las variables
$motivo = mysqli_real_escape_string($mysqli, $motivo);
$fecha_hora_exhumacion = mysqli_real_escape_string($mysqli, $fecha_hora_exhumacion);
$destino_restos = mysqli_real_escape_string($mysqli, $destino_restos);
$descripcion_exhumacion = mysqli_real_escape_string($mysqli, $descripcion_exhumacion);

// Inserta los datos en la tabla de exhumación
$query = "INSERT INTO tb_exhumacion (motivo, fecha_hora_exhumacion, destino_restos, descripcion_exhumacion) 
          VALUES ('$motivo', '$fecha_hora_exhumacion', '$destino_restos', '$descripcion_exhumacion')";

if(mysqli_query($mysqli, $query)) {
    echo "La exhumación se registró correctamente.";
    // Redirige después de mostrar el mensaje de éxito
    echo '<script>window.location="exhumacion.php";</script>';
} else {
    echo "Error al registrar la exhumación: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?> 