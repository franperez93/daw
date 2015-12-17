<?php

/*Creamos una classe jugador donde almacenaremos todos los datos del jugador
asi como sus puntos, su tirada.

Tambien tendremos los guetters y setters para trabajar con el*/

    class Jugador{
        private $nombre="";
        private $apellido="";
        private $edad=0;
        private $puntos=0;
        private $tirada=0;
        
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function getApellido(){
           return $this->apellido;
        }
         public function setApellido($apellido){
            $this->apellido=$apellido;
        }
        public function getEdad(){
            return $this->edad;
        }
         public function setEdad($edad){
            $this->edad=$edad;
        }
        
        public function getPuntos(){
            return $this->puntos;
        }
        public function setPuntos($puntos){
            $this->puntos=$puntos;
        }
        public function getTirada(){
            return $this->tirada;
        }
        public function setTirada($tirada){
            $this->tirada=$tirada;
        }
    
    }
?>