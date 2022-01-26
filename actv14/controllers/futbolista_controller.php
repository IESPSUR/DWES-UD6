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
?>