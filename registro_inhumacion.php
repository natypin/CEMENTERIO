<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR INHUMACIÓN</title>
    <link rel="stylesheet" href="css/mystyle2.css"/>
</head>
<body>
   
    <form action="guardar_inhumacion.php" method="POST">
        <h2>REGISTRAR INHUMACIÓN</h2><br>
        <div class="container">
            <label for="ubicacion_tumba">Ubicación de la Tumba:</label>
            <input type="text" id="ubicacion_tumba" name="ubicacion_tumba" required><br>
            
            <label for="fecha_hora_inhumacion">Fecha y Hora de Inhumación:</label>
            <input type="datetime-local" id="fecha_hora_inhumacion" name="fecha_hora_inhumacion" required><br>

            <label for="descripcion_inhumacion">Descripción:</label>
            <input type="text" id="descripcion_inhumacion" name="descripcion_inhumacion"  required><br>
            
            <div class="clearfix">
                <button type="submit" class="signupbtn">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>
