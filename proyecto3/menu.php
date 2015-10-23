<?php 
	
	include 'funcion.php';
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
		"Juegos"=>array(
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
										<li><a href="#"><?php print_r($value[$idioma]);?></a></li>
										<?php	
							  }
							}
						}?>
								</ul>
        </li>
        <li><a href="#"><?php print_r($menu["instrucciones"][$idioma]);?></a></li>
      </ul>
    </div>
  </div>
</nav>