<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mi menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>


<?php 

	$idioma="esp";
	$menu=array(
		"titulo"=>array(
			"esp"=>"Math Dice",
			"eng"=>"Math Dice"
		),
		"inicio"=>array(
			"esp"=>"Inicio",
			"eng"=>"Home"
		),
		"juego"=>array(
			"esp"=>"Juego",
			"eng"=>"Game",
			"submenu"=>array(
				"juego1"=>array(
					"esp"=>"Juego 1",
					"eng"=>"Game 1"

				),
				"juego2"=>array(
					"esp"=>"Juego 2",
					"eng"=>"Game 2"
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
				foreach ($valor as $key => $value) {	
				};
			};
	};

 ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php print_r($menu["titulo"][$idioma]);?></a>
    </div>
    <div>
      <ul class="nav navbar-nav">

      
        <li class="active"><a href="#"><?php print_r($menu["inicio"][$idioma]);?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php print_r($menu["juego"][$idioma]);?><span class="caret"></span></a>
       
          <ul class="dropdown-menu">
            <li><a href="#"><?php print_r($value["juego1"][$idioma]);?></a></li>
            <li><a href="#"><?php print_r($value["juego2"][$idioma]);?></a></li>
          </ul>
        </li>
        <li><a href="#"><?php print_r($menu["instrucciones"][$idioma]);?></a></li>
      </ul>
    </div>
  </div>
</nav>
  


  
</body>
</html>
