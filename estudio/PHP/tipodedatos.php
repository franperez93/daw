<?php 

	//Creacion de variables
		/*Para crear la variable, solo tenemos que poner
			un signo del dolar $ y el valor de la variable
			y automaticamente el lenguaje reconoce que tipo es.
		*/
		$numero=15;
		$esVerdad=true;
		//El caso de los strings, tiene una peculiaridad	
		$string1='hola como estas';/*si las comillas que 
		utilizamos son simples, nos leera como texto plano, 
		aunque metamos una variable.*/
		$string2="bien aqui con $numero amigos"/*en este caso, 
		utilizando comillas dobles, nos traducira la variable que
		hemos introducido dentro por lo que mostrara el 5*/

		//Utilizamos el echo para mostrar el valor d la vriable
		echo $numero;
		echo "hola";

		/*podemos concatenar un <br> o codigo htmldirectamente a
			la variable o tambien dentro de ella*/

		$string1="hola como estas"."<br>"
		$string1="<br>"."hola como estas"

		echo "<br>".$numero;
		echo $numero."<br>";

 ?>