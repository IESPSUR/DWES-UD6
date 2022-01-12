<?php
    class Local{
        private string $ciudad;
        private string $calle;
        private int $numPlantas;
        private float $area;
        private Dimensiones $dimensiones;

        public function __construct($ciudad,$calle,$numPlantas,$dimensiones){
            $this->ciudad=$ciudad;
            $this->calle=$calle;
            $this->numPlantas=$numPlantas;
            $this->dimensiones=$dimensiones;
        }

        public function __set($name, $value){
            if($name != "numPlantas" && $name!="dimensiones"){
                $this->name=$value;
            }
            else if($name == "numPlantas"){
                if($value>0 && $value<11){
                $this->name=$value;
                }
                else{
                    echo "Error, el numero de plantas debe estar entre 1 y 10";
                }
            }
            else if($name == "dimensiones"){
                if($name instanceof Dimensiones){
                    $this->name=$value;
                }
                else{
                    echo "Error, dimensiones no es una instancia de Dimensiones";
                }
            }
            else{
                echo "Error";
            }
        }

        public function __get($name){ 
            return $this->name;
        }

        public function getArea(){
            $ancho = $this->__get("ancho");
            $largo = $this->__get("largo");
            return ($ancho * $largo);
        }

        public function __toString(){
            return "<p>Ciudad: " . $this->ciudad . "<br></p>Calle:" .  $this->calle . "<br></p>Plantas: " . $this->numPlantas . "<br></p>Dimensiones: (" . $this->dimensiones . ")<br></p>";
        }

        public function __clone(){
            $this->dimensiones = clone $this->dimensiones;
        }
    }
    /*
    $dimensiones1 = new Dimensiones(12,10,26);
    $prueba1 = new Local("Sevilla","C/ Buenos Aires, 23",3,$dimensiones1);
    $prueba1->__clone();
    $dimensiones2 = new Dimensiones(14,15,24);
    $prueba2 = new Local("Cádiz","C/ Portugal, 3",6,$dimensiones2);
    */
    

?>