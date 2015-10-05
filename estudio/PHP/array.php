<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	
	//Creamos una variable, que almacena nuestro array de colores
	$array_simple=array("rojo","verde","azul");

	echo $array_simple;//en los arrays no podemos usar echo, ya que esto devolvera error.
	//tendremos dos alternativas:
	var_dump($array_simple);//muestra los datos del array con gran cantidad de informacion
	print_r($array_simple);// array con menos info, solo mostrando la posicion de cada elemento

	//En este ejemplo, al crear el array, asociamos cada uno de los elementos a una clave.
	$array_clave=array(
		/*clave => elemento*/
		1 =>"valencia",
		"b" =>true,
		2 =>2.4,
		"d" => 5
	);
	var_dump($array_clave);
	print_r($array_clave);

	//Seleccionar un valor especifico del array
	echo "<br>";
	echo $array_simple[1];
	echo "<br>";
	echo $array_clave["d"];
	
	$array_clave["d"]=3;//con el array clave, podemos modificar algun valor especifico del array
	echo "<br>";
	echo $array_clave["d"];

echo "<br>";
echo $array_clave[1];

 ?>

</body>
</html>