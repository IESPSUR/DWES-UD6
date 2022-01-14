<?php

function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }

    $vehiculo1 = new vehiculo(450,"rojo");

 $vehiculo1->circula();
 echo "<br>";

 $vehiculo1->añadir_persona(50);
 $vehiculo1->añadir_persona(60);

 echo $vehiculo1->peso;

?>