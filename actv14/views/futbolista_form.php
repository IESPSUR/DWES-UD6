<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Edita elemento</title>
    </head>
    <body>

        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="index.php?controller=futbolista&action=cargarJugador">Nuevo elemento</a></li>
                <li><a class="active" href="index.php">Lista elementos</a></li>
            </ul>
        </nav>
        <form class="form-register" enctype="multipart/form-data"  method="POST" action="index.php?controller=futbolista&action=validarJugador">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <?php
                if (isset($_GET['id'])) {
                    $id= $_GET['id'];
                }else {
                    $id="";
                }
                ?>
                <input type="hidden" name="id" value="<?php echo $id?>"><!--aquí va el id, es hidden por lo tanto no es visible en la web, pero si accesible desde PHP -->
                <input type="text" name="nombre" placeholder="" class="input-100" required value="<?php echo $futbolista['nombre'];?>">
                <input type="text" name="club" placeholder="" class="input-100" required value="<?php echo $futbolista['club'];?>">
                <input type="text" name="nacionalidad" placeholder="" class="input-100" required value="<?php echo $futbolista['nacionalidad'];?>">
                <input type="number" name="ngoles" placeholder="" class="input-48" required value="<?php echo $futbolista['ngoles'];?>">
                <input type="number" name="npartidos" placeholder="" class="input-48" required value="<?php echo $futbolista['npartidos'];?>">
                <input type="date" name="fnacimiento" placeholder="" class="input-100" required value="<?php echo $futbolista['fnacimiento'];?>">
                <img name="fotoaEditar" width=200px src="images/<?php echo $futbolista['foto'];?>"><!-- Aquí tienes que cargar la imagen actual -->
                <input type="file" name="foto" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Insertar" class="btn-enviar" >
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>