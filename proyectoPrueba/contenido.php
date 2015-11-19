<?php
		
		require('lib/cabecera.php');
		require('lib/menu.php');
		require('lib/Juego.php');
		require('lib/Jugador.php');
		
		session_start();
		
		cabecera();
		menu($_SESSION['Juego']->getIdioma());
		$puntosObjetivo=5;
		//var_dump($_SESSION['Jugador']);
		//var_dump($_SESSION['Nombre']);
		
?>	
<div class="row">
	<div class="col-md-2">
		<div class="dropdown" id="menu2">
		  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=$_SESSION['Jugador']->getNombre()." ".$_SESSION['Jugador']->getApellido()?><span class="caret"></span></button>
		  <ul class="dropdown-menu" id="result">
		  	<br>
		    <table class="table">
					<tr class="info">
						<td><strong>Puntos:</strong></td>
						<td></td>
						<td><strong><?=$_SESSION['Jugador']->getPuntos()?></strong></td>
					</tr>
					<tr class="danger">
						<td><strong>Puntos objetivo:</strong></td>
						<td></td>
						<td><strong><?=$puntosObjetivo?></strong></td>
					</tr>
						<tr class="warning">
						<td><strong>Intentos:</strong></td>
						<td></td>
						<td><strong><?=$intentos?></strong></td>
					</tr>
					
				</table>
		  </ul>
		</div>
	</div>
	<div class="col-md-8 col-md-offset-1"><h1>Bienvenido <?=$_SESSION['Jugador']->getNombre()." ".$_SESSION['Jugador']->getApellido()?>, realiza tus operaciones</h1></div>
</div>
<div class='container-fluid'>
    <div class='row'></div>
	<br>
	<div class='row'>
		<div class='col-md-2 col-md-offset-1'><img src="imagen/dado<?=$dado1?>.png" id="dados" onclick="arreglo(<?=$dado1?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado2?>.png" id="dados" onclick="arreglo(<?=$dado2?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado3?>.png" id="dados" onclick="arreglo(<?=$dado3?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado4?>.png" id="dados" onclick="arreglo(<?=$dado4?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado5?>.png" id="dados" onclick="arreglo(<?=$dado5?>)"/></div>
	</div>
</div>
<br>
<div class"container">
	<div class="row" >
		<div class='col-md-2 col-md-offset-5'><img src="imagen/dode/dode<?=$dodeca?>.png" id="dados"/></div>
	</div>
</div>
<br>
<div class='container'>
	<div class='row'>
			<form role="form" action="contenido.php" method="post">
			</form>	
			<div class="col-md-4 col-md-offset-4" id="operaciones">
				<input class="form-control" name="text" id="Ctexto" value="" readonly/>
			</div>
			
	</div>			
</div>
    