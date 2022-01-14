<?php 
    class Cine extends LocalComercial{
        private int $aforoSala;

        public function __construct($aforoSala){
            $this->aforoSala = $aforoSala;
        }

        public function __set($name, $value){
            if($value > 0){
                $this->name = $value;
            }
            else{
                echo "ERROR, el aforo debe ser mayor a 0";
            }
        }
        
        public function __toString(){
            return "<p>" . "datoslocal" . "Aforo: " . $this->aforoSala . "<br></p>";

        }
    } 

?>