<?php

	    require('lib/cabecera.php');
		require('lib/menu.php');
		require('lib/Juego.php');
		require('lib/Jugador.php');
		
		session_start();
		
		cabecera();
		menu($_SESSION['Juego']->getIdioma());
		
		echo "<div class='alert alert-success'><h1>FELICITACIONES!! has ganado ".$_SESSION['Jugador']->getNombre()." con una puntuacion de: ".$_SESSION['Jugador']->getPuntos()."</h1><br>";
?>

		<button class="btn btn-danger"><a href="index.php">VOLVER A INICIO</a></button> 
		
		
	