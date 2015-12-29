<?php
   
    require('lib/cabecera.php');
	require('lib/menu.php');
	
    require_once('Juego.php');
    require_once('Jugador.php');
    require_once('conexionBd.php');
    session_start();

    cabecera();
    $baseDatos = new BaseDatos();
    
        if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){ 
            if(isset($_POST['accion'])&& $_POST['accion']=="datosUsuario"){
                $_SESSION['Jugador'] = new Jugador();
                $_SESSION['Juego'] = new Juego();
               if($jugadorBd=$baseDatos->comprobarUser($_POST['email'])){
                    $_SESSION['Jugador']->setNombre($jugadorBd['nombre']);
                    $_SESSION['Jugador']->setApellido($jugadorBd['apellido']);
                    $_SESSION['Jugador']->setEdad($jugadorBd['edad']);
                    $_SESSION['Jugador']->setEmail($jugadorBd['email']);
                     $_SESSION['Jugador']->setPuntos($jugadorBd['puntos']);
                    $_SESSION['Juego']->setJuego($_POST['juego']);
                    if(isset($_POST['idioma'])){
                        $_SESSION['Juego']->setIdioma($_POST['idioma']);
                    }else{
                        $_SESSION['Juego']->setIdioma('esp');
                    }
                }else{
                    $id=$baseDatos->insertarUser($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['edad']);
                    $_SESSION['Jugador']->setNombre($_POST['nombre']);
                    $_SESSION['Jugador']->setApellido($_POST['apellido']);
                    $_SESSION['Jugador']->setEdad($_POST['edad']);
                    $_SESSION['Jugador']->setEmail($_POST['email']);
                    $_SESSION['Juego']->setJuego($_POST['juego']);
                    if(isset($_POST['idioma'])){
                        $_SESSION['Juego']->setIdioma($_POST['idioma']);
                    }else{
                        $_SESSION['Juego']->setIdioma('esp');
                    }
                }
            }    
        }       
 
   if(isset($_SESSION['Jugador'])){ 
       $puntosObjetivo=5;
		$_SESSION['Jugador']->setTirada($_POST['hidden']);
		$puntos=$_SESSION['Jugador']->getPuntos();	
		if($_POST['hidden']!=0){
			if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca']){
				$puntos++;
				$_SESSION['Jugador']->setPuntos($puntos);
				$baseDatos->actualizaUser($_SESSION['Jugador']->getPuntos(), $_SESSION['Jugador']->getEmail());
				
			}	
		}
		if($_SESSION['Jugador']->getPuntos()==$puntosObjetivo){
			header('Location: resultado.php');
		}
    
    }
?>