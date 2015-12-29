<?php

     require('lib/auth.php');
     
     if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){   
	   header('Location: index.php');
	}
	
	menu($_SESSION['Juego']->getIdioma());

	echo "<div class='alert alert-success'><h1>FELICITACIONES!! has ganado ".$_SESSION['Jugador']->getNombre()." con una puntuacion de: ".$_SESSION['Jugador']->getPuntos()."</h1><br>";
?>

		<button class="btn btn-danger"><a href="index.php">VOLVER A INICIO</a></button> 
		