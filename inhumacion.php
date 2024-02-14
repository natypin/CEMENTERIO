<?php
include("configuracion.php");

// Hacer la consulta SELECT a la tabla de inhumaciones
$query ="SELECT * FROM tb_inhumacion";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css"/>
    <title>INHUMACIONES</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_inhumacion.php"><i class="fa fa-registered"></i></a>
        <a href="menu.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>INHUMACIONES</h2>
    <hr>
    <div class="container">
        <!-- Creamos la tabla para presentar las inhumaciones de la base de datos -->
        <?php
        echo "<table border='1'>
             <tr>
             <th>Código</th>
             <th>Ubicación de la Tumba</th>
             <th>Fecha y Hora de Inhumación</th>
             <th>Descripción</th>
             <th>Actualizar</th>
             <th>Eliminar</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            // Recorremos cada fila del resultado y la presentamos
            echo "<tr>";
            echo "<td>". $row['id_inhumacion'] ."</td>";
            echo "<td>". $row['ubicacion_tumba'] ."</td>";
            echo "<td>". $row['fecha_hora_inhumacion'] ."</td>";
            echo "<td>". $row['descripcion_inhumacion'] ."</td>";
            echo "<td><a href='editar_inhumacion.php?id=" . $row['id_inhumacion'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_inhumacion.php?id=" . $row['id_inhumacion'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Fin de la tabla
        ?>    
    </div>
</body>
</html>
