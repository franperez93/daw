<?php

class Jugador{
    
   public $nombre = 'Jugador 1';//le pasamos un valor predeterminado
   
   //Creamos un costructor
   function __construct(){
       $this->mensajeBr("El jugador se llama: ".$this->nombre);
       
   }
   
   
   
   public function getNombre(){//declaramos un metodo que recoje el valor
    return $this->nombre;
    //echo $this->nombre; tambien nos vale esta forma
   }
   
   public function setNombre($nombre){//una funcion que nos modifica el valor
       $this->nombre=$nombre;
   }
    
    
    //Creamos funciones para imprimir
    
    private function mensajeBr($mensaje){
        echo $mensaje."<br>";
        
    }
}    


?>