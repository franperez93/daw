<?php
    
    //require('conexionBd.php');
    require('lib/cabecera.php');
	require('lib/menu.php');
    
    require_once('Juego.php');
    require_once('Jugador.php');  
    session_start();
    
    cabecera();
    
    function creaSesion(){
        
        if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){    
            //if(strlen($_POST['nombre'])>0){
                $_SESSION['Jugador'] = new Jugador();
                $_SESSION['Juego'] = new Juego();
                //if(isset($_POST['juego'])){
                    $_SESSION['Jugador']->setNombre($_POST['nombre']);
                    $_SESSION['Jugador']->setApellido($_POST['apellido']);
                    $_SESSION['Jugador']->setEdad($_POST['edad']);
                    $_SESSION['Juego']->setJuego($_POST['juego']);
                    if(isset($_POST['idioma'])){
                        $_SESSION['Juego']->setIdioma($_POST['idioma']);
                    }else{
                        $_SESSION['Juego']->setIdioma('esp');
                    }
               // }
           // }
        }
    }
    
    /*
    function editaSesion(){
        
        if(isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())!=0){    
            $_SESSION['Jugador']->setNombre($_POST['nombre']);
            $_SESSION['Jugador']->setApellido($_POST['apellido']);
            $_SESSION['Jugador']->setEdad($_POST['edad']);
            $_SESSION['Juego']->setJuego($_POST['juego']);
            if(isset($_POST['idioma'])){
                $_SESSION['Juego']->setIdioma($_POST['idioma']);
            }else{
               // $_SESSION['Juego']->setIdioma('esp');
            }
        }
    }
    */
    
    function tiradaJugador(){
        $puntosObjetivo=5;
		$_SESSION['Jugador']->setTirada($_POST['hidden']);
		$puntos=$_SESSION['Jugador']->getPuntos();	
		if($_POST['hidden']!=0){
			if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca']){
				$puntos++;
				$_SESSION['Jugador']->setPuntos($puntos);	
			}	
		}
		if($_SESSION['Jugador']->getPuntos()==$puntosObjetivo){
			header('Location: resultado.php');
		}
    }

?>