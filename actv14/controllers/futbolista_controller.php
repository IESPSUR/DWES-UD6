<?php 
    //http://localhost/php/DWES-UD6/actv14/index.php?controller=futbolista&action=mostrarJugador
    //http://localhost/php/DWES-UD6/actv14/futbolista_view.php?id=1
    function mostrarFutbolistas(){
        require 'models/futbolista_model.php';
        $datos = obtenerTodos();
        include 'views/futbolista_list.php'; 
    }

    function mostrarJugador (){
        require 'models/futbolista_model.php';
        $futbolista = obtenerElemento($_GET["id"]);
        include 'views/futbolista_view.php';  
    }

    function borrarJugador (){
        require 'models/futbolista_model.php';
        $futbolista = eliminaElemento($_GET["id"]);
        include 'views/futbolista_delete.php';  
    }

    function cargarJugador (){
        require 'models/futbolista_model.php';
        if (!empty($_GET["id"])) {
            $futbolista=obtenerElemento($_GET["id"]);
        }else {
            $futbolista['nombre']="";
            $futbolista['nacionalidad']="";
            $futbolista['club']="";
            $futbolista['ngoles']="";
            $futbolista['npartidos']="";
            $futbolista['fnacimiento']="";
            $futbolista['foto']="";
            $futbolista['id']="";

        }

        include 'views/futbolista_form.php';  
    }


    function validarJugador (){
        require 'models/futbolista_model.php';

        if (!empty($_POST['id'])){
            $id=$_POST['id'];
        }
        $nombre=$_POST["nombre"];
        $club=$_POST["club"];
        $nacionalidad=$_POST["nacionalidad"];
        $ngoles=$_POST["ngoles"];
        $npartidos=$_POST["npartidos"];
        $fnacimiento=$_POST["fnacimiento"];
        
        
        $nombre=strip_tags($_POST["nombre"]);
        $nombre=stripslashes($_POST["nombre"]);
        $nombre=htmlspecialchars($_POST["nombre"]);

        $club=strip_tags($_POST["club"]);
        $club=stripslashes($_POST["club"]);
        $club=htmlspecialchars($_POST["club"]);

        $nacionalidad=strip_tags($_POST["nacionalidad"]);
        $nacionalidad=stripslashes($_POST["nacionalidad"]);
        $nacionalidad=htmlspecialchars($_POST["nacionalidad"]);

                if (!empty($_POST["id"])) {

                        $errorImagen="";
                        $resultado=obtenerElemento($id);
                        
                
                        $target_dir = "images/";
                        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (isset($_FILES["foto"]["name"])) {
                        $uploadOk = 0;
                        if (!empty($_POST["id"])) {
                            
                            $imagen = $resultado["foto"];
                        } else {
                            $errorImagen = "La imagen no se ha añadido";
                        }
                    } else {
                        $check = getimagesize($_FILES["foto"]["tmp_name"]);
                        if ($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $errorImagen = "El archivo no es una imagen";
                            $uploadOk = 0;
                        }
                        if (file_exists($target_file)) {
                            $errorImagen = "El archivo ya existe";
                            $uploadOk = 0;
                            $imagen = $resultado["foto"];
                        }
                        if ($imageFileType != "png" && $imageFileType != "jpeg") {
                            $errorImagen = "Solo formato .png o jpeg";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 0) {
                            $errorImagen = "La imagen no se pudo guardar";
                            $error = false;
                        } else {
                            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                                $imagen = $_FILES["foto"]["name"];
                            } else {
                                $errorImagen = "No se pudo guardar la imagen.";
                                $error = false;
                            }
                        }
                    }

                    editarElemento($_POST["id"], $nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento,$imagen);
                    header("Location: index.php?controller=futbolista&action=mostrarJugador&id=$id");
                }else {
                    $target_dir = "images/";
                        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                    if (isset($_FILES["foto"]["name"])) {
                        $uploadOk = 0;
                        if (empty($_POST["id"])) {
                           
                            $imagen = $_FILES["foto"]["name"];
                        } else {
                            $errorImagen = "La imagen no se ha añadido";
                        }
                    } else {
                        $check = getimagesize($_FILES["foto"]["tmp_name"]);
                        if ($check !== false) {
                            $uploadOk = 1;
                        } else {
                            $errorImagen = "El archivo no es una imagen";
                            $uploadOk = 0;
                        }
                        if (!file_exists($target_file)) {
                            $errorImagen = "El archivo ya existe";
                            $uploadOk = 1;
                            $imagen = $_FILES["foto"]["name"];
                        }
                        if ($imageFileType != "png" && $imageFileType != "jpeg") {
                            $errorImagen = "Solo formato .png o jpeg";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 0) {
                            $errorImagen = "La imagen no se pudo guardar";
                            $error = false;
                        } else {
                            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                                $imagen = $_FILES["foto"]["name"];
                            } else {
                                $errorImagen = "No se pudo guardar la imagen.";
                                $error = false;
                            }
                        }
                    }
                    
                    insertaElemento($nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento,$imagen);
                    header("Location: index.php?controller=futbolista&action=mostrarFutbolistas");
                }
                 
        
        
        
    }
    
    


    
?>