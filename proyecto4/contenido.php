<div class='container'>
   
	<br>
	
	<div class='row'>
		
		<?php
		
			$dado1=dados(1,6);
			$dado2=dados(1,6);
		
		?>
		
		<div class='col-md-2'><h3>Dado 1</h3><img src="imagen/dado<?=$dado1?>.png"/></div>
		<div class='col-md-2 col-md-offset-1'><h3>Dado 2</h3><img src="imagen/dado<?=$dado2?>.png"/></div>
		
		<div class='col-md-6 col-md-offset-1'><h3>Operaciones</h3>
			
			<form role="form" action="resultado.php" method="post">
				<div class="form-group">
					 <label for="dado1">Dado 1</label>
    			  	 <input type="text" class="form-control" name="dado1">
    			  	 <input type="hidden" name="hidden1" value="<?=$dado1?>">
				</div>
				
				
    			  	<label><input type="radio" name="oper" value="+"> Suma</label>
    			  	<label><input type="radio" name="oper" value="-"> Resta</label>
   				
				
				<div class="form-group">
				    <label for="dado2">Dado 2</label>
				    <input type="text" class="form-control" name="dado2">
				    <input type="hidden" name="hidden2" value="<?= $dado2?>">
				</div>
				
			 	<button type="submit" class="btn btn-primary">Calcular</button>
			</form>
		</div>
	</div>
	
	<br>
	<div class='row'>

		<div class="col-md-1"><button class="btn btn-primary">Boton Prueba</button></div>

	</div>
</div	
