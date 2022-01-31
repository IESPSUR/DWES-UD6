<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h2>Inicia sesión</h2>
            <form method="POST" action="index.php?controller=usuario&action=validaLogin">
                <p>Usuario:</p>
                <p><input type="text" placeholder="Ingrese su usuario" name="usuario"/></p>
                <p>Password:</p>
                <p><input type="password" placeholder="Ingrese su contraseña" name="pass"/></p>
                <p><input type="submit" value="Iniciar Sesion" /></p>
            </form>
    </body>
</html>