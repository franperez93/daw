<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$array_simple=array("rojo","verde","azul");	
	//echo "el num de elementos del array es ".count($array_simple);
	 /*Con el count lo que hacemos es devolver el numero de elementos del array con un entero.
	 utilizamos el . para concatenar las cadenas*/

//dentro del for le decimos que mientras i es menor que el recuento de elementos del array siga el bucle
	 for($i=0; $i<count($array_simple); $i++){
	//una vez recorrido el bucle va mostrando el valor de i y luego por cada posicion del array su elemento 	
	 		echo "El valor de la posicion $i es ".$array_simple[$i]."<br>";

	 }

 ?>


</body>
</html>