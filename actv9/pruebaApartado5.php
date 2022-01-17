<?php

/*function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }*/

 spl_autoload_register(function($name) {         include_once ('includes/class.' . $name . '.php');     });



 $coche = new Coche(2100,"verde", 4,2);

 $coche->añadir_persona(80);
 
 $coche->repintar("azul");
 $coche->verAtributo($coche);
 $coche->quitar_cadenas_nieve(4);
 $coche->repintar("negro");

 $coche->verAtributo($coche);
 

?>