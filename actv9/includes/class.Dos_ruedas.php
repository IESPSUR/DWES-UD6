<?php
class Dos_ruedas extends Vehiculo{
        private int $cilindrada;

        public function __construct($peso,$color,$cilindrada){
            parent:: __construct($peso,$color);
            $this->cilindrada = $cilindrada;
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

        public function poner_gasolina($litros_gasolina){
            $this->peso+=($litros_gasolina*1.5);
        }

    } 
?>