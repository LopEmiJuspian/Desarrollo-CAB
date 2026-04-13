<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link rel="stylesheet" href="../static/iniciar_sesion_vista.css">
</head>
<body>

    <main id="caja_padre">

        <img id="fondo_login" src="../static/imagen_fondo_login.png" alt="">

        <div id="caja_contenedora">

            <div id="caja_imagen">

                <img id="imagen_discapacidad" src="../static/imagen_discapacidad.png" alt="">

            </div>

            <div id="zona_login">

                <h1>Iniciar sesión</h1>

                <form id="recoger_datos" action="/login" method="post">

                    <div id="momento">

                        <label>Numero de documento</label>

                        <input type="text" name="documento" id="documento" placeholder="Ingrese su numero de documento" pattern="[0-9a-zA-Z]{6,10}" minlength="6" maxlength="10" title="Ingresa un numero de documento valido" required>

                    </div>  

                    <div id="momento">

                        <label>Contraseña</label>

                        <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" pattern="[A-Za-z\d#$%&._]{6,16}" minlength="6" maxlength="16" title="Ingresa una contraseña valida" required>

                    </div>

                    <button type="submit" id="btn_iniciar_sesion" name="btn_iniciar_sesion">Iniciar sesión</button>

                </form>

            </div>

        </div>

    </main>

</body>
</html>