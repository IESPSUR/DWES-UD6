<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/view.css">
        <title>Vista detalle</title>
    </head>
    <body>

    <?php
                $nombre=$futbolista['nombre'];
                $nacionalidad=$futbolista['nacionalidad'];
                $club=$futbolista['club'];
                $ngoles=$futbolista['ngoles'];
                $npartidos=$futbolista['npartidos'];
                $fnacimiento=$futbolista['fnacimiento'];
                $foto=$futbolista['foto'];
                $id=$futbolista['id'];

    ?>



        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a href="index.php?controller=futbolista&action=cargarJugador">Nuevo elemento</a></li>
                <li><a class="active" href='index.php'>Lista elementos</a></li>
            </ul>
        </nav>  

        <div class="container">
            <header>
                <div class="bio">
                    <img src="images/<?php echo $foto?>" alt="background" class="bg"><!--aquí va el link a la imagen-->
                    <div>
                        <h3><?php echo $nombre;?></h3><!--aquí va el valor del texto 1-->
                        <p><?php echo $club?></p><!-- aquí va el valor del texto 2--> 
                        <p><?php echo $nacionalidad?></p><!-- aquí va el valor del texto 3-->
                    </div>
                </div>
            </header>

            <div class="content">
                <div class="data">
                    <ul>
                        <li>
                        <?php echo $ngoles?> <!-- aquí va el valor del número 1-->
                            <span>Número de Goles</span><!-- pon aquí el nombre de tu número 1-->
                        </li>
                        <li>
                        <?php echo $npartidos?> <!-- aquí va el valor del número 2-->
                            <span>Número de partidos</span><!-- pon aquí el nombre de tu número 2-->
                        </li>
                        <li>
                        <?php echo $fnacimiento?> <!-- aquí va el valor de la fecha-->
                            <span>Fecha de nacimiento</span><!-- pon aquí el nombre de tu fecha-->
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </body>
</html>