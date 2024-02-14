<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿TIENES CUENTA?</h3>
                    <p>Inicia sesion para ingresar al sistema</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿NO TIENES CUENTA?</h3>
                    <p>Registrate para que puedas ingresar al sistema</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">   
                    <button type="button" onclick="window.location.href = 'menu.php'">Ingresar</button>
                </form>

                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo">
                    <input type="text" placeholder="Correo Electronico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button type="button" onclick="window.location.href = '/cementerio/menu.php'">Ingresar</button>
                </form>
            </div>
        </div>
        
    </main>

    <script src="/cementerio/js/script.js"></script>

</body>
</html>
