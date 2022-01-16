<?php

abstract class Vehiculo{
    private float $peso;
    private string $color;
    
    public function __construct($peso,$color){
        $this->peso=$peso;
        $this->color=$color;
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo,$valor){
            $this->$atributo=$valor;
    }

    public function circula(){
        echo "El vehículo está circulando";
    }

    abstract protected function añadir_persona($peso_persona);


    public static function verAtributo($obj){
        echo "Color: " . $obj->color . "<br>";
        echo "Peso: " . $obj->peso . "<br>";
        //echo "Cambios de color: " . self::$color . "<br>";

        if (get_class($obj) == "Cuatro_ruedas" || get_class($obj) == "Coche" || get_class($obj) == "Camion") {
            echo "Número de puertas: " . $obj->numero_puertas . "<br>";
        }

        if (get_class($obj) == "Coche") {
            echo "Número de cadenas de: " . $obj->numero_cadenas_nieve . "<br>";
        }

        if (get_class($obj) == "Dos_ruedas") {
            echo "Cilindrada: " . $obj->cilindrada . "<br>";
        }

        if (get_class($obj) == "Camion") {
            echo "Longitud: " . $obj->longitud . "<br>";
        }
    }

}


?>