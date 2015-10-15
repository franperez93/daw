<!DOCTYPE html>
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
            <li><a href="#"><?php print_r($value["juego3"][$idioma]);?></a></li>
          </ul>
        </li>
        <li><a href="#"><?php print_r($menu["instrucciones"][$idioma]);?></a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"><img src="imagen/dado1.png"/></div>
		<div class="col-md-2"><img src="imagen/dado2.png"/></div>
		<div class="col-md-2"><img src="imagen/dado3.png"/></div>
		<div class="col-md-2"><img src="imagen/dado4.png"/></div>
		<div class="col-md-2"><img src="imagen/dado5.png"/></div>
		<div class="col-md-2"><img src="imagen/dado6.png"/></div>
	</div>
	<br>



  

