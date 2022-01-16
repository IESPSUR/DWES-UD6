<?php

/*function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }*/

 spl_autoload_register(function($name) {         include_once ('includes/class.' . $name . '.php');     });



 $dos_ruedas = new Dos_ruedas(1550,"transparente", 10);
 $dos_ruedas->añadir_persona(70);

 $dos_ruedas->verAtributo($dos_ruedas);
 echo "<br>";

 $camion = new Camion(6000,"blanco",2,12);

 $camion->repintar("azul");

 $camion->añadir_persona(84);

 $camion->numero_puertas+=2;

$camion->verAtributo($camion);

?>