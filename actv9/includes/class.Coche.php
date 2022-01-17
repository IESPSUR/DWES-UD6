<?php
class Coche extends Cuatro_ruedas{
        private int $numero_cadenas_nieve;

        public function __construct($peso,$color,$numero_puertas,$numero_cadenas_nieve){
            parent:: __construct($peso,$color,$numero_puertas);
            $this->numero_cadenas_nieve = $numero_cadenas_nieve;
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

        public function añadir_cadenas_nieve($nCadenas){
            $this->numero_cadenas_nieve+=$nCadenas;
        }

        public function quitar_cadenas_nieve($nCadenas){
            $this->numero_cadenas_nieve-=$nCadenas;
        }

        public function añadir_persona($peso_persona){
            parent::añadir_persona($peso_persona);
            if ($this->peso >= 1500 && $this->numero_cadenas_nieve<=2) {
                echo "Atención, ponga 4 cadenas para la nieve.";
                echo "<br>";
            }

        }

    } 
?>