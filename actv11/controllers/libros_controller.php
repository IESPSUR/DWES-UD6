<?php 
    //http://localhost/DWES22/DWES-UD6/ejercicio11/index.php?controller=libros&action=listar
    function listar(){
        require 'models/libros_model.php';
        $libros = getLibros();
        include 'views/libros_listar.php';    
    }
    //http://localhost/DWES22/DWES-UD6/ejercicio11/index.php?controller=libros&action=mostrarLibro&id=2
    function mostrarLibro(){
        require 'models/libros_model.php';
        $libros = getLibro($_GET['id']);
        include 'views/libros_listar.php'; 
    }
?>