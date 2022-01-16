<?php
class Cuatro_ruedas extends Vehiculo{
        private int $numero_puertas;

        public function __construct($peso,$color,$numero_puertas){
            parent:: __construct($peso,$color);
            $this->numero_puertas = $numero_puertas;
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
        
        public function repintar ($color_nuevo){
                $this->color=$color_nuevo;
        }

        public function añadir_persona($peso_persona){
            $this->peso+=$peso_persona;
        }

    } 
?>