<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$idioma = "esp";
	$menu = array(
		1 => array(
			"esp" => "inicio",
			"eng" => "home",
			"submenu"=> array(
				"esp" => "juego",
				"eng" => "game",
				"juego1" => array(
					"esp"=>"puta",
					"eng" =>"bitch"
					)
			)				
		)
	);

	foreach ($menu as $key => $value) {
			print_r($value);
	};
	

 ?>

</body>
</html>