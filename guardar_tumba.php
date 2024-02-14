<?php
include("configuracion.php");

// Recibe los datos del formulario
$numero_tumba = $_POST['numero_tumba'];
$seccion = $_POST['seccion'];
$tipo = $_POST['tipo'];
$fila = $_POST['fila'];
$estado_tumba = $_POST['estado_tumba'];

// Evita posibles problemas de inyección SQL escapando las variables
$numero_tumba = mysqli_real_escape_string($mysqli, $numero_tumba);
$seccion = mysqli_real_escape_string($mysqli, $seccion);
$tipo = mysqli_real_escape_string($mysqli, $tipo);
$fila = mysqli_real_escape_string($mysqli, $fila);
$estado_tumba = mysqli_real_escape_string($mysqli, $estado_tumba);

// Inserta los datos en la tabla de tumbas
$query = "INSERT INTO tb_tumba (numero_tumba, seccion, tipo, fila, estado_tumba) 
          VALUES ('$numero_tumba', '$seccion', '$tipo', '$fila', '$estado_tumba')";

if(mysqli_query($mysqli, $query)) {
    echo "La tumba se registró correctamente.";
    // Redirige después de mostrar el mensaje de éxito
    echo '<script>window.location="tumbas.php";</script>';
} else {
    echo "Error al registrar la tumba: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
