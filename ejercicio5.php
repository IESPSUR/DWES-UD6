<?php
    interface IEquipoFutbol{
        public function getNumeroJugadores();
        public function juegaPartido();
    }

    interface ICampeonato{
        public function getNombreCampeonato();
    }

    class EquipoFutbol implements IEquipoFutbol,ICampeonato{
        private int $numJugadores;
        private string $nombreEquipo;
        private string $nombreCampeonato;

        public function __construct($numJugadores,$nombreEquipo,$nombreCampeonato){
            $this->numJugadores=$numJugadores;
            $this->nombreEquipo=$nombreEquipo;
            $this->nombreCampeonato=$nombreCampeonato;
        }

        public function getNumeroJugadores(){
            return $this->numJugadores;
        }

        public function juegaPartido(){
            echo $this->nombreEquipo . " VICTORIA";
        }

        public function getNombreCampeonato(){
            echo $this->nombreCampeonato;
        }
    }

    $equipo = new EquipoFutbol(23,"KOI","Super Liga");
    echo $equipo->getNombreCampeonato() . " ";
    echo $equipo->getNumeroJugadores() . " ";
    echo $equipo->juegaPartido();
?>