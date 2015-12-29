<?php
    
    require('lib/auth.php');

	if(!isset($_SESSION['Jugador']) || strlen($_SESSION['Jugador']->getNombre())==0){   
	   header('Location: index.php');
	}
	
	menu($_SESSION['Juego']->getIdioma());
	
	//var_dump($_SESSION['Jugador']);
	//var_dump($jugadorBd);
	
?>
<div class="row">
	<div class="col-md-2">
		<div class="dropdown" id="menu2">
		  <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=$_SESSION['Jugador']->getNombre()." ".$_SESSION['Jugador']->getApellido()?><span class="caret"></span></button>
		  <ul class="dropdown-menu" id="result">
		  	<br>
		    <table class="table">
					<tr class="info">
						<td><strong>Tirada:</strong></td>
						<td></td>
						<td><strong><?=$_SESSION['Jugador']->getTirada()?></strong></td>
					</tr>
					<tr class="warning">
						<td><strong>Puntos:</strong></td>
						<td></td>
						<td><strong><?=$_SESSION['Jugador']->getPuntos()?></strong></td>
					</tr>
					<tr class="danger">
						<td><strong>Puntos objetivo:</strong></td>
						<td></td>
						<td><strong><?=$puntosObjetivo?></strong></td>
					</tr>
					
				</table>
		  </ul>
		</div>
	</div>
	<div class="col-md-8 col-md-offset-1"><h2>Bienvenido <?=$_SESSION['Jugador']->getNombre()." ".$_SESSION['Jugador']->getApellido()?>, realiza tus operaciones</h2></div>
</div>
<div class='container-fluid'>
    <div class='row'></div>
	<br>
	<div class='row'>
		<div class='col-md-2 col-md-offset-1'><img src="imagen/dado<?=$dado1?>.png" id="dados1" onclick="numero1(<?=$dado1?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado2?>.png" id="dados2" onclick="numero2(<?=$dado2?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado3?>.png" id="dados3" onclick="numero3(<?=$dado3?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado4?>.png" id="dados4" onclick="numero4(<?=$dado4?>)"/></div>
		<div class='col-md-2 '><img src="imagen/dado<?=$dado5?>.png" id="dados5" onclick="numero5(<?=$dado5?>)"/></div>
	</div>
</div>
<br>
<div class"container">
	<div class="row" >
		<?php if($_SESSION['Juego']->getJuego()==Junior){ ?>
			<div class='col-md-1 col-md-offset-3'><img src="imagen/operadores/suma.png" id="operadores" onclick="operador('+')"/></div>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/dode/dode<?=$dodeca?>.png" id="dados"/></div>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/operadores/resta.png" id="operadores" onclick="operador('-')"/></div>
		<?php
		}else{
		?>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/operadores/multiplicacion.png" id="operadores" onclick="operador('*')"/></div>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/operadores/suma.png" id="operadores" onclick="operador('+')"/></div>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/dode/dode<?=$dodeca?>.png" id="dados"/></div>
			
			<div class='col-md-1 col-md-offset-1'><img src="imagen/operadores/resta.png" id="operadores" onclick="operador('-')"/></div>
			<div class='col-md-1 col-md-offset-1'><img src="imagen/operadores/division.png" id="operadores" onclick="operador('/')"/></div>
		<?php
		}
		?>
	</div>
</div>
<br>
<div class='container'>
	<div class='row'>
		<div class="col-md-4 col-md-offset-4" id="operaciones">
			<form role="form" action="contenido.php" method="post">
			<input class="form-control" name="text" id="Ctexto" value="" readonly/>
			<input type="hidden" name="hidden" id="hidden" value=""/>
			<input type="hidden" name="dodeca" id="hidden" value="<?=$dodeca?>"/>
			<input type="hidden" name="dado1" id="hidden" value="<?=$dado1?>"/>
		</div>
		<div class="col-md-4" >
		<?php
			 if(strlen($_POST['hidden'])!=0){
			    if($_POST['hidden']!=0 && $_SESSION['Jugador']->getTirada()==$_POST['dodeca']){
			        echo "<div class='alert alert-success'><h2>Genial! Tu tirada es: ".$_SESSION['Jugador']->getTirada()."<br> y el resultado es "
			    		.$_POST['dodeca']."</h2><br>";
			    }else{
			    	echo "<div class='alert alert-danger'><h2>Fatal! Tu tirada es: ".$_SESSION['Jugador']->getTirada()."<br> y el resultado es "
			    		.$_POST['dodeca']."</h2><br>";
			    }
			 }
    	?>
		</div>
	</div>
	<br>
	<div class='row'>
		<div class="col-md-3 col-md-offset-5">
			<input type="submit" class="btn3d btn btn-danger btn-lg" value="Comprobar Resultado" onclick="resultado()"/>
		</div>
	</div>
			</form>
</div>