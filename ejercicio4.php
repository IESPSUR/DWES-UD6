<?php 
    class Vivienda {
        private string $tipoVivienda;
        private float $valorMercado;
    
        public function __construct($tipoVivienda,$valorMercado){
            $this->tipoVivienda=$tipoVivienda;
            $this->valorMercado=$valorMercado;
        }

        public function __get($atributo){
            return $this->$atributo . " ";
        }

        public function __set($atributo,$valor){
            switch ($atributo) {
                case 'valorMercado':
                    if($valor>0){
                        $this->$atributo = $valor;
                    }
                    else{
                        echo "el valor de mercado no puede ser menor o igual a 0";
                    }
                    break;
                
                default:
                    $this->$atributo = $valor;
                    break;
                }
            }
        }

    $vivienda = new Vivienda("Casa",400000);

    echo $vivienda->tipoVivienda;
    echo $vivienda->valorMercado;

    $vivienda->tipoVivienda="Piso";
    $vivienda->valorMercado=0;
    echo $vivienda->tipoVivienda;
    echo $vivienda->valorMercado;
?>