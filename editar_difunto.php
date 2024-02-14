<?php
include("configuracion.php");

// Verificar si se ha enviado un formulario de actualización
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['causa_difuncion'])) {
    $id = $_GET['id'];
    $causa_difuncion = $_POST['causa_difuncion'];

    // Realizar la actualización en la base de datos
    $sql = "UPDATE tb_difunto SET causa_difuncion='$causa_difuncion' WHERE id_difunto=$id";

    if(mysqli_query($mysqli, $sql)) {
        echo '<script language="javascript">';
        echo 'alert("Actualizado exitosamente");';
        echo 'window.location="difunto.php";';
        echo '</script>';
        exit();
    } else {
        echo "Error al actualizar: " . mysqli_error($mysqli);
    }
}

// Obtén el ID del difunto a editar (debería pasarse desde la página difunto.php)
$id = $_GET['id'];

// Realiza la consulta para obtener los datos actuales del difunto
$query = "SELECT * FROM tb_difunto WHERE id_difunto = $id";
$result = mysqli_query($mysqli, $query);

// Verifica si se encontraron datos
if ($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <title>Editar Difunto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="home.html"><i class="fa fa-home"></i></a>
        <a href="difunto.php"><i class="fa fa-user"></i></a>
    </div>

    <h2>EDITAR DIFUNTO</h2>
    <hr>

    <!-- Creo un formulario para editar los datos del difunto -->
    <form action="editar_difunto.php?id=<?php echo $id; ?>" method="POST">
        <div class="container">
            <label for="nombre_difunto"><b>Nombres:</b></label>
            <input type="text" placeholder="Ingrese los nombres" name="nombre_difunto" value="<?php echo $row['nombre_difunto']; ?>" required>

            <label for="apellidos_difunto"><b>Apellidos:</b></label>
            <input type="text" placeholder="Ingrese los apellidos" name="apellidos_difunto" value="<?php echo $row['apellidos_difunto']; ?>" required>

            <label for="fecha_nacimiento_difunto"><b>Fecha de Nacimiento:</b></label>
            <input type="text" placeholder="Ingrese la fecha de nacimiento" name="fecha_nacimiento_difunto" value="<?php echo $row['fecha_nacimiento_difunto']; ?>" required>

            <label for="fecha_difuncion"><b>Fecha de Defunción:</b></label>
            <input type="text" placeholder="Ingrese la fecha de defunción" name="fecha_difuncion" value="<?php echo $row['fecha_difuncion']; ?>" required>

            <label for="causa_difuncion"><b>Causa de Defunción:</b></label>
            <input type="text" placeholder="Ingrese la causa de defunción" name="causa_difuncion" value="<?php echo $row['causa_difuncion']; ?>" required>

            <button type="submit">Actualizar</button>
        </div>
    </form>
</body>
</html>
<?php
} else {
    echo "No se encontraron datos para el difunto con ID $id";
}
?>