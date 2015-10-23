<div class='container-fluid'>
    <div class='row'>

<?php
		for ($i=1; $i <=6 ; $i++){?>
		<div class='col-md-2'><img src="imagen/dado<?php echo $i?>.png"/></div>
		<?php
		}
		?>

	</div>
	<br>
	
	<div class='row'>
		
		<div class='col-md-2'><h3>Dado Seis Caras: 6</h3><img src="imagen/dado<?php echo dados(1,6)?>.png"/></div>
		<div class='col-md-2'><h3>Dado Tres Caras: 3</h3><img src="imagen/dado<?php echo dados(1,3)?>.png"/></div>
		
</div>
	
	
<!--En este apartado, primero creamos un bucle que nos muestra una tira de dados
ordenados.

Luego bajo de estos, Generamos dos dados cuyo valor recojeremos de la funcion creada 
en el otro php llamada dados() y a la cual le pasaremos el valor minimo y maximo que puede 
tener nuestro dado.-->

