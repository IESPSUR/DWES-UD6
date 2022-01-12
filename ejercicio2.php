<?php

include "ejercicio1.php";

    class Trabajador extends Persona{
        private $empresa;
    
        public function __construct($nombre,$dni,$sexo,$peso,$altura,$empresa){
            $this->empresa = $empresa;
            Persona::__construct($nombre,$dni,$sexo,$peso,$altura);
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
        public function getEmpresa(){
            return $this->empresa;
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
        public function setEmpresa($empresa){
            $this->empresa = $empresa;
        }

        public function mostrar(){
            Persona::mostrar();
            echo "su empresa es: $this->empresa"; 
        }
    }

$trabajador = new Trabajador("Antonio","231423x","Masculino",92.4,185,"deloitte");

$trabajador->mostrar();
$trabajador->setNombre("Manuel");
$trabajador->setPeso(90);
$trabajador->setSexo("Femenino");
$trabajador->setDNI("1111111111G");
$trabajador->setAltura(192);
$persona->mostrar();
?>