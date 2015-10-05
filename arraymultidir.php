<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	$id="esp";
	$menu=array(
		"0"=>array(
			"esp"=>"Math Dice",
			"eng"=>"Math Dice"
		),
		"1"=>array(
			"esp"=>"Inicio",
			"eng"=>"Home"
		),
		"2"=>array(
			"esp"=>"Juego",
			"eng"=>"Game",
			"3"=>array(
				"juego1"=>array(
					"esp"=>"Juego 1",
					"eng"=>"Game 1"

				),
				"juego2"=>array(
					"esp"=>"Juego 2",
					"eng"=>"Game 2"
				)
			)
		)
	);

	foreach ($menu as $clave => $valor) {
			//echo "$valor";	
		foreach ($valor as $clave2 => $valor2) {
					//print_r($menu[$valor2]);

				//print_r($valor2);
			}
		}
				echo"<br>";	
		foreach ($valor2 as $clave3 => $valor3) {

			foreach ($valor3 as $clave4 => $valor4) {
				//print_r($valor4);
				//echo "$valor4 ";
				
				}
		}


		//print_r($menu[$clave]);		
	
	
	
	

	//echo count($menu);
	
	//var_dump($menu);
	
		




	//echo"<br>";
	//echo count($menu);
	for ($i=0; $i<count($menu);$i++) {
		for($j=1;$j<count($menu[0]);$j++) {
			for($x=0;$x<count($menu[0]);$x++) {
				print_r($menu[$i][$id]);

			}
		}
		
	}
			
		
	
	//var_dump($menu);
 ?>


</body>
</html>