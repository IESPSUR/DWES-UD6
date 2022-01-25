<?php

function listar (){
//se incluye el modelo
require './models/libros_model.php';
//En $libros tenemos una array con todos los libros gracias al modelio
//La vista recibe un array para mostrarlo por pantalla
$libros= getLibros();
include './views/libros_listar.php';



}
?>