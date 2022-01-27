<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Document</title>

    <style>
      h2 {
        color:green;
        text-align: center;
    
    }
    </style>

</head>
<body>

    <?php

    //obtiene el elemento de la url
    $id = $_GET["id"];
    if (eliminaElemento($id)) {
        $error= "<h2>El futbolista ha sido borrado correctamente</h2>";
    }else {
        $error="<h2>El futbolista no ha sido eliminado</h2>";
    }
    
    ?>

    <nav>
        <ul>
            <li><a href="index.php">Página principal</a></li>
            <li><a href="create.php">Nuevo elemento</a></li>
            <li><a class="active" href="list.php">Lista elementos</a></li>
            <li><a href="import.php">Importar elementos</a></li>
        </ul>
    </nav>

    <h3><?php echo $error?></h3>
</body>
</html>