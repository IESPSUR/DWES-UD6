<?php

Class Vehiculo{
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

    public function añadir_persona($peso_persona){
        $this->peso+=$peso_persona;
    }

}


?>