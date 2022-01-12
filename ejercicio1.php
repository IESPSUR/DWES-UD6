<?php
    class Persona{
        private $nombre;
        private $dni;
        private $sexo;
        private $peso;
        private $altura;

        public function __construct($nombre, $dni , $sexo , $peso , $altura){
            $this->nombre = $nombre;
            $this->dni = $dni;
            $this->sexo = $sexo;
            $this->peso = $peso;
            $this->altura = $altura;
        }

        public function getNombre(){
            $this->nombre;
        }
        public function getDNI(){
            return $this->dni;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getPeso(){
            return $this->peso;
        }
        public function getAltura(){
            return $this->altura;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setDNI($dni){
            $this->dni = $dni;
        }
        public function setSexo($sexo){
            $this->sexo = $sexo;
        }
        public function setPeso($peso){
            $this->peso = $peso;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function mostrar(){
            echo "Los datos de la persona $this->nombre con dni $this->dni son: $this->sexo con peso $this->peso y altura $this->altura cm";
        }
    }

$persona = new Persona("Antonio","231423x","Masculino",92.4,185);

$persona->mostrar();
$persona->setNombre("Manuel");
$persona->setPeso(90);
$persona->setSexo("Femenino");
$persona->setDNI("1111111111G");
$persona->setAltura(192);
// $persona->mostrar();
?>