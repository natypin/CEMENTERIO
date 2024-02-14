<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR VISITAS</title>
    <link rel="stylesheet" href="css/mystyle2.css"/>
</head>
<body>
   
    <form action="guardar_visitas.php" method="POST">
        <h2>REGISTRAR VISITA</h2><br>
        <div class="container">
            <label for="nombre">Nombre del Visitante:</label>
            <input type="text" id="nombre" name="nombre" required><br>
            
            <label for="apellido">Apellido del Visitante:</label>
            <input type="text" id="apellido" name="apellido" required><br>

            <label for="relacion_difunto">Relacion con el Difunto:</label>
            <input type="text" id="relacion_difunto" name="relacion_difunto" required><br>
            
            <label for="fecha_visita">Fecha de Visita:</label>
            <input type="date" id="fecha_visita" name="fecha_visita" required><br>

            <label for="hora_ingreso">Hora de Visita:</label>
            <input type="time" id="hora_ingreso" name="hora_ingreso" required><br>
            
            <div class="clearfix">
                <button type="submit" class="signupbtn">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>
