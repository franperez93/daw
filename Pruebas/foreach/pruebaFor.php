<?php

        $idioma="esp";
    	//Creamos un array para el menu, este contendra varios arrya mas dentro, con sus claves y sus valores
    	$menu=array(
    		"titulo"=>array(
    			"esp"=>"Math Dice",
    			"eng"=>"Math Dice"
    		),
    		"inicio"=>array(
    			"esp"=>"Inicio",
    			"eng"=>"Home"
    		),
    		"Juegos"=>array(
    			"esp"=>"Juego",
    			"eng"=>"Game",
    			//En el array tambien encontramos un submenu, con diferentes opciones dentro de arrays
    			"submenu"=>array(
    				"juego1"=>array(
    					"esp"=>"Juego 1",
    					"eng"=>"Game 1"
    
    				),
    				"juego2"=>array(
    					"esp"=>"Juego 2",
    					"eng"=>"Game 2"
    				),
    					"juego3"=>array(
    					"esp"=>"Juego 3",
    					"eng"=>"Game 3"
    				)
    			)
    		),
    		"instrucciones"=>array(
    			"esp"=>"Instrucciones",
    			"eng"=>"Instruction"
    		)
	);
	
  
      foreach ($menu as $clave => $valor) { 

		if(isset($valor['submenu'])){
			foreach ($valor['submenu'] as $key => $value) {
			
			echo "<br>";
			print_r($value[$idioma]);
			
			}
		}
      }				
								

?>