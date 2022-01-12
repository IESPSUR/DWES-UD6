<?php 
    class LocalComercial{
        private string $razonSocial;
        private string $numLicencia;

        public function __construct($razonSocial,$numLicencia){
            $this->razonSocial = $razonSocial;
            $this->numLicencia = $numLicencia;
        }

        public function __toString(){
            echo "<p>El local está situado en la ciudad" . $this->ciudad . " en la calle " . $this->calle . ".El local dispone de " . $this->numPlantas . "</p>Razón Social:" .  $this->razonSocial . "<br></p><p>Numero de Licencia: " . $this->numLicencia . "<br></p>";
        }
    }

?>