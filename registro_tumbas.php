<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR TUMBA</title>
    <link rel="stylesheet" href="css/mystyle2.css"/>
</head>
<body>
   
    <form action="guardar_tumba.php" method="POST">
        <h2>REGISTRAR TUMBA</h2><br>
        <div class="container">
            <label for="numero_tumba">Número de Tumba:</label>
            <input type="text" id="numero_tumba" name="numero_tumba" required><br>
            
            <label for="seccion">Sección:</label>
            <input type="text" id="seccion" name="seccion" required><br>

            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" required><br>
            
            <label for="fila">Fila:</label>
            <input type="text" id="fila" name="fila" required><br>

            <label for="estado_tumba">Estado de la Tumba:</label>
            <input type="text" id="estado_tumba" name="estado_tumba" required><br>
            
            <div class="clearfix">
                <button type="submit" class="signupbtn">Registrar</button>
            </div>
        </div>
    </form>
</body>
</html>