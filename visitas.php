<?php
include("configuracion.php");
// Hacer la consulta SELECT a la tabla de visitas
$query ="SELECT * FROM tb_visitas";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css"/>
    <title>VISITAS</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_visitas.php"><i class="fa fa-registered"></i></a>
        <a href="menu.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>VISITAS</h2>
    <hr>
    <div class="container">
        <!-- Creamos la tabla para presentar las visitas de la base de datos -->
        <?php
        echo "<table border='1'>
             <tr>
             <th>Código</th>
             <th>Nombres</th>
             <th>Apellidos</th>
             <th>Relación Difunto</th>
             <th>Fecha Visita</th>
             <th>Hora Ingreso</th>
             <th>Hora Salida</th>
             <th>Actualizar</th>
             <th>Eliminar</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            // Recorremos cada fila del resultado y la presentamos
            echo "<tr>";
            echo "<td>". $row['id_visitas'] ."</td>";
            echo "<td>". $row['nombre'] ."</td>";
            echo "<td>". $row['apellido'] ."</td>";
            echo "<td>". $row['relacion_difunto'] ."</td>";
            echo "<td>". $row['fecha_visita'] ."</td>";
            echo "<td>". $row['hora_ingreso'] ."</td>";
            echo "<td>". $row['hora_salida'] ."</td>";
            echo "<td><a href='editar_visita.php?id=" . $row['id_visitas'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_visita.php?id=" . $row['id_visitas'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Fin de la tabla
        ?>    
    </div>
</body>
</html>
