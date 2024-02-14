<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR EXHUMACIÓN</title>
    <link rel="stylesheet" href="css/mystyle2.css"/>
</head>
<body>
   
    <form action="guardar_exhumacion.php" method="POST">
        <h2>REGISTRAR EXHUMACIÓN</h2><br>
        <div class="container">
            <label for="motivo">Motivo:</label>
            <input type="text" id="motivo" name="motivo" required><br>
            
            <label for="fecha_hora_exhumacion">Fecha y Hora de Exhumación:</label>
            <input type="datetime-local" id="fecha_hora_exhumacion" name="fecha_hora_exhumacion" required><br>

            <label for="destino_restos">Destino de Restos:</label>
            <input type="text" id="destino_restos" name="destino_restos" required><br>
            
            <label for="descripcion_exhumacion">Descripción:</label>
            <input type="text" id="descripcion_exhumacion" name="descripcion_exhumacion"  required><br>
            
            <div class="clearfix">
                <button type="submit" class="signupbtn">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>
