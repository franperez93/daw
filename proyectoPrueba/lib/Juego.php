<?php

	class Juego{
		
	public	$idioma="esp";
	public	$juego="";
	
	 public function getIdioma(){
            return $this->idioma;
     }
     public function setIdioma($idioma){
            $this->idioma=$idioma;
     }
     
      public function getJuego(){
            return $this->juego;
     }
     public function setJuego($juego){
            $this->juego=$juego;
     }
     
}

 function dados($min,$max){

	$result = rand($min , $max);
	return $result;
}
	$dado1=dados(1,6);
		$dado2=dados(1,6);
		$dado3=dados(1,6);
		$dado4=dados(1,6);
		$dado5=dados(1,6);
		$dodeca=dados(1,12);
?>

