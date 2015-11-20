<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>


<?php 
	
	//Creamos la variable que controlara el idioma de nuestro menu
	$idioma="eng";
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


 ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php print_r($menu["titulo"][$idioma]);?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">

      
        <li class="active"><a href="#"><?php print_r($menu["inicio"][$idioma]);?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu["Juegos"][$idioma]);?><span class="caret"></span></a>
       
			          <ul class="dropdown-menu">
			          	
			       <?php   	

			      foreach ($menu as $clave => $valor) { 
							if(isset($valor['submenu'])){
								foreach ($valor['submenu'] as $key => $value) {?>
										<li><a href="#"><?php echo($value[$idioma]);?></a></li>
			   	<?php	}
							}
						}?>
								</ul>
							<!--Una vez recorrido los arrays y obtenido los datos necesarios, 
							procedemos a introducir esos datos dentro de cada apartado del menu.
							
							para ello, indexando codigo php dentro del html, le pasamos al array $menu
							los valores que queremos que tome en cada lugar y la variable con el idioma en 
							que nos mostrara el resultado.-->

        </li>
        <li><a href="#"><?php print_r($menu["instrucciones"][$idioma]);?></a></li>
      </ul>
    </div>
  </div>
</nav>
  


  
</body>
</html>