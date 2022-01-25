<?php 
    //http://localhost/DWES22/DWES-UD6/ejercicio12/index.php?controller=periodicos&action=mostrarPeriodicos
    function mostrarPeriodicos(){
        require 'models/periodicos_model.php';
        $datos = obtenerTodos();
        include 'views/periodicos_listar.php'; 
    }
?>