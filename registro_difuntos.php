<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR DIFUNTOS</title>
    <link rel="stylesheet" href="css/mystyle2.css"/>
</head>
<body>
   
    <form action="guardar_difunto.php" method="POST">
        <h2>REGISTRAR DIFUNTO</h2><br>
        <div class="container">
            <label for="nombre_difunto">Nombres:</label>
            <input type="text" id="nombre_difunto" name="nombre_difunto" required><br>
            
            <label for="apellidos_difunto">Apellidos:</label>
            <input type="text" id="apellidos_difunto" name="apellidos_difunto" required><br>
            
            <label for="genero_difunto">Sexo:</label>
            <input type="text" id="genero_difunto" name="genero_difunto" required><br>
            
            <label for="fecha_nacimiento_difunto">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento_difunto" name="fecha_nacimiento_difunto" required><br>
            
            <label for="fecha_defuncion">Fecha de Defunción:</label>
            <input type="date" id="fecha_defuncion" name="fecha_defuncion" required><br>
            
            <label for="causa_defuncion">Causa de Defunción:</label>
            <input type="text" id="causa_defuncion" name="causa_defuncion" required><br>
            
            <div class="clearfix">
                <button type="submit" class="signupbtn">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>
