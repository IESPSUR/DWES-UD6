<?php

function __autoload($name) {
    include_once 'includes/class.' . $name . '.php';
 }

    $coche1 = new Coche(650,"rojo",5,0);

 
 echo "<br>";

 $coche1->añadir_persona(700);
 
 echo $coche1->color;
 echo "<br>";
 echo $coche1->peso;

 $coche1->repintar("amarillo");
 echo "<br>";
 echo $coche1->color;
 echo "<br>";

 $coche1->añadir_cadenas_nieve(4);

 echo $coche1->numero_cadenas_nieve;

 $dos_ruedas = new Dos_ruedas(30,"marron", 10);
 $dos_ruedas->añadir_persona(2);
 $dos_ruedas->poner_gasolina(2000);

 echo "<br>";
 echo $dos_ruedas->color;
 echo "<br>";
 echo $dos_ruedas->peso;


?>