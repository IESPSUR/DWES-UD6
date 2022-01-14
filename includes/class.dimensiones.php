<?php

Class Dimensiones{
    private float $alto;
    private float $ancho;
    private float $largo;


    public function __construct($alto,$ancho,$largo){
        $this->alto=$alto;
        $this->ancho=$ancho;
        $this->largo=$largo;
    }

    public function __get($atributo){
        return $this->$atributo . " ";
    }

    public function __set($atributo,$valor){
        if ($valor > 0 && is_float($valor)) {
            $this->$atributo=$valor;
        }
        else{
            echo "ERROR el dato no puede ser menor a 0";
            exit;
        }
    }

    public function __toString(){
        return "alto=" . $this->alto . ",ancho=" . $this->ancho . ",largo=" . $this->largo;
    }


}


?>