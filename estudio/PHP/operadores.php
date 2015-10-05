<html>
<head>
	<title></title>
</head>
<body>
 hola caracola
	<?php 

		$numero=5;
		$numero2=6;
		//tambien podemos asignar realizando operacion a la vez
		$numero += 5;

		//SUMA,RESTA,MULTIPLICACION,DIVISION
		$numero+$numero2;
		$numero-$numero2;
		$numero2*$numero;
		$numero/$numero2;
		echo "el resul de la suma es ".($numero2+$numero);

		//INCREMENTOS/DECREMENTOS
		$numero++//esto seria 6
		$numero--//seria 4

		/*en el caso de que quisieramos mostrar datos, podriamos:
			·Mostras y incrementar/decrementar*/ echo $numero++;/*
			·Incrementar/decrementar y luego mostrar*/ echo --$numero


	 ?>

	

</body>
</html>
