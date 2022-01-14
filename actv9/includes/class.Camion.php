<?php
class Camion extends Cuatro_ruedas{
        private float $longitud;

        public function __construct($peso,$color,$numero_puertas,$longitud){
            parent:: __construct($peso,$color,$numero_puertas);
            $this->longitud = $longitud;
        }

        public function __get($name){
            if(property_exists(get_class(),$name)){
                return $this->$name;
            }
            else{
                return parent::__get($name);
            }
        }

        public function __set($name, $value){
            if(property_exists(get_class(),$name)){
                $this->$name = $value;
            }
            else{
                parent::__set($name,$value);
            }
        }

        public function añadir_remolque($longitud_remolque){
            $this->longitud+=$longitud_remolque;
        }

    } 
?>