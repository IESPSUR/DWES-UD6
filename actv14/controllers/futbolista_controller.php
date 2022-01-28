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
        $id = $_GET["id"];
        $futbolista=obtenerElemento($id);
        include 'views/futbolista_edit.php';  
    }


    function validarJugador (){
        require 'models/futbolista_model.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_POST['id'];
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
        
        

        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        


        
        if($_FILES['foto']['size']!=0){
            
            $foto = $_FILES["foto"]["name"];

            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
                editarElemento($_GET["id"], $nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento,$foto);
            }
        }else{
            $foto=$futbolista['foto'];
                editarElemento($_GET["id"], $nombre, $club, $nacionalidad, $ngoles, $npartidos, $fnacimiento,$foto); 
                
        }
        
        header("Location: index.php?controller=futbolista&action=mostrarJugador&id=$id");
        
    }
    include 'views/futbolista_edit.php';
    }
?>