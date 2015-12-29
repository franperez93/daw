<?php 
	
	function menu($idioma){
	$idioma=$idioma;
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
					"esp"=>"Junior",
					"eng"=>"Junior"

				),
				"juego2"=>array(
					"esp"=>"Junior+",
					"eng"=>"Junior+"
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
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?=($menu["titulo"][$idioma]);?></a>
    </div>
    <div>
      <ul class="nav navbar-nav" role="menu">
      	
        <li><a href="index.php"><?=($menu["inicio"][$idioma]);?></a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?=($menu["Juegos"][$idioma]);?><span class="caret"></span></a>
       
			          <ul class="dropdown-menu">
			          	
			       <?php   	
			      
			      foreach ($menu as $clave => $valor) { 
							if(isset($valor['submenu'])){
								foreach ($valor['submenu'] as $key => $value) {?>
										<li><a href="contenido.php"><?=($value[$idioma]);?></a></li>
										<?php	
							  }
							}
						}?>
								</ul>
        </li>
        <li><a href="instrucciones.php"><?=($menu["instrucciones"][$idioma]);?></a></li>
      </ul>
      <div class="navbar-text navbar-right">Puntos: <?=$_SESSION['Jugador']->getPuntos()?></div>
      <div class="navbar-text navbar-right"><?=$_SESSION['Jugador']->getEmail()?></div>
    </div>
  </div>
</nav>
<?php
}
?>