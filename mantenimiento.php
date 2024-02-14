<?php
include("configuracion.php");
// Hacer la consulta SELECT a la tabla de mantenimiento
$query ="SELECT * FROM tb_mantenimiento";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css"/>
    <title>MANTENIMIENTO</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_mantenimiento.php"><i class="fa fa-registered"></i></a>
        <a href="registro.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>MANTENIMIENTO</h2>
    <hr>
    <div class="container">
        <!-- Creamos la tabla para presentar los datos de mantenimiento de la base de datos -->
        <?php
        echo "<table border='1'>
             <tr>
             <th>Código</th>
             <th>Descripción Mantenimiento</th>
             <th>Fecha Mantenimiento</th>
             <th>Costo Mantenimiento</th>
             <th>Actualizar</th>
             <th>Eliminar</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            // Recorremos cada fila del resultado y la presentamos
            echo "<tr>";
            echo "<td>". $row['id_mantenimiento'] ."</td>";
            echo "<td>". $row['descripcion_mantenimiento'] ."</td>";
            echo "<td>". $row['fecha_mantenimiento'] ."</td>";
            echo "<td>". $row['costo_mantenimiento'] ."</td>";
            echo "<td><a href='editar_mantenimiento.php?id=" . $row['id_mantenimiento'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_mantenimiento.php?id=" . $row['id_mantenimiento'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Fin de la tabla
        ?>    
    </div>
</body>
</html>
