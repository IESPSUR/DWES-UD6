<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Crea elemento</title>
    </head>
    <body>

    <?php
    
    include "databaseManagement.inc.php";

    $nombre="";
    $club="";
    $nacionalidad="";
    $npartidos=0;
    $ngoles=0;
    $fnacimiento="";
    $foto="";
    $id=0;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $nombre=strip_tags($_POST["nombre"]);
	    $nombre=stripslashes($_POST["nombre"]);
		$nombre=htmlspecialchars($_POST["nombre"]);

        $club=strip_tags($_POST["club"]);
	    $club=stripslashes($_POST["club"]);
		$club=htmlspecialchars($_POST["club"]);

        $nacionalidad=strip_tags($_POST["nacionalidad"]);
	    $nacionalidad=stripslashes($_POST["nacionalidad"]);
		$nacionalidad=htmlspecialchars($_POST["nacionalidad"]);

        $ngoles=$_POST["ngoles"];
        $npartidos=$_POST["npartidos"];
        $fnacimiento=$_POST["fnacimiento"];
        $foto=$_POST["foto"];

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["foto"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["foto"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $foto = $_FILES["foto"]["name"];
        $id=insertaElemento($nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento, $foto);
        if($id > 0){
            header("Location: view.php?id=$id");
        }else{
            echo "error";
        }

        }

    ?>


        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a class="active" href="create.php">Nuevo elemento</a></li>
                <li><a href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>
        <form class="form-register" enctype="multipart/form-data" action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" name="club" placeholder="Club" class="input-100" required>
                <input type="text" name="nacionalidad" placeholder="Nacionalidad" class="input-100" required>
                <input type="number" name="ngoles" placeholder="Número de goles" class="input-48" required>
                <input type="number" name="npartidos" placeholder="Número de partidos" class="input-48"required >
                <input type="date" name="fnacimiento" placeholder="Fecha de nacimiento" class="input-100" required>
                <input type="file" name="foto" accept="image/png, image/jpeg" class="input-100">
                <input type="submit" value="Registrar" class="btn-enviar" name="submit">
                <div id="errores"></div>
            </div>
        </form>





        
    </body>
</html>



