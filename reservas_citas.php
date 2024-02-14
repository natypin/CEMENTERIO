<?php
include("configuracion.php");
// Hacer la consulta SELECT a la tabla de reservas de citas
$query ="SELECT * FROM tb_reservas_citas";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css"/>
    <title>RESERVAS DE CITAS</title>
</head>
<body>
    <!-- Creamos un menú -->
    <div class="icon-bar">
        <a href="registro_reservas_citas.php"><i class="fa fa-registered"></i></a>
        <a href="registro.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>RESERVAS DE CITAS</h2>
    <hr>
    <div class="container">
        <!-- Creamos la tabla para presentar los datos de reservas de citas de la base de datos -->
        <?php
        echo "<table border='1'>
             <tr>
             <th>Código</th>
             <th>Fecha Reserva</th>
             <th>Hora Reserva</th>
             <th>Tipo de Servicio</th>
             <th>Detalle del Servicio</th>
             <th>Actualizar</th>
             <th>Eliminar</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            // Recorremos cada fila del resultado y la presentamos
            echo "<tr>";
            echo "<td>". $row['id_reserva_cita'] ."</td>";
            echo "<td>". $row['fecha_reserva'] ."</td>";
            echo "<td>". $row['hora_reserva'] ."</td>";
            echo "<td>". $row['tipo_servicio'] ."</td>";
            echo "<td>". $row['detalle_servicio'] ."</td>";
            echo "<td><a href='editar_reserva_cita.php?id=" . $row['id_reserva_cita'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar_reserva_cita.php?id=" . $row['id_reserva_cita'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Fin de la tabla
        ?>    
    </div>
</body>
</html>
