<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$array_clave=array(

		"vlc"=>"valencia",
		"mdr"=>"madrid",
		"bcn"=>"barcelona",

		);

	foreach ($array_clave as $clave => $valor) {
		echo "Clave: $clave; Valor: $valor"; 
		echo "<br>";
	}

 ?>

</body>
</html>