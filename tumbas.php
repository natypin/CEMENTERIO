<?php
include("configuracion.php");
//hago el query con el select
$query ="SELECT * FROM tb_tumba" ;
$result=mysqli_query($mysqli,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css"/>
    <title>TUMBAS</title>
</head>
<body>
    <!-- creamos un menu -->
    <div class="icon-bar">
        <a href="registro_tumbas.php"><i class="fa fa-registered"></i></a>
        <a href="menu.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>TUMBAS</h2>
    <hr>
    <div class="container">
  <!-- creo la tabla para presentar las tumbas de la base de datos -->
  <?php
        echo "<table border='1'>
             <tr>
             <th>Codigo</th>
             <th>Nª Tumba</th>
             <th>Seccion</th>
             <th>Tipo</th>
             <th>Fila</th>
             <th>Estado</th>
             <th>Actualizar</th>
             <th>Eliminar</th>
             </tr>";
             while ($row=mysqli_fetch_array($result)) {
                //recorro cada uno del array y lo voy presentando
                echo "<tr>";
                echo "<td>". $row['id_tumba'] ."</td>";
                echo "<td>". $row['numero_tumba'] ."</td>";
                echo "<td>". $row['seccion'] ."</td>";
                echo "<td>". $row['tipo'] ."</td>";
                echo "<td>". $row['fila'] ."</td>";
                echo "<td>". $row['estado_tumba'] ."</td>";
                echo "<td><a href='editar.php?id=" . $row['id_tumba'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
                echo "<td><a href='eliminar.php?id=" . $row['id_tumba'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>"; 
                echo "</tr>";
            }
                echo "</table>";
                //fin de la tabla
                ?>    

</body>
</html>