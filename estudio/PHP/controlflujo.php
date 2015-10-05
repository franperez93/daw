<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	/*
	aqui genera dos estilos predeterminados, que luego llamaremos cuando nos interese.
	*/
.ok{

	width: 50%;/*genera un cuadro del 50% del tamaño de pantalla*/
	border: 1px solid #000000; /*le pone de borde 1 y de color negro*/
	margin:auto;/*le dice que se coloque en la pantalla automaticamente centrada*/
	background-color: green;/*le dice que el color del backgorun es verde*/
}

.ko{

	width: 50%;
	border: 1px solid #000000;
	margin:auto;
	background-color: red;
}


</style>

</head>
<body>

<?php 

	$num_ale=rand(0,10);
	//alamcena en la variable $num_ale, un numero aleatorio entre 0 y 10.
 ?>

 <div class="<?=($num_ale>5? 'ok':'ko')?>">El numero es <?=$num_ale?> </div>
 <!-- aqui abre una seccion en el documento
  luego abre una etiqueta de php '<.?.=' todo junto pero lo pongo separado o me 
  reconoce como php ;) luego hacemos el 
  if indicamos la condicion ($num_ale>5? **usamos interogacion ppara pregruntar la condicon.  
  'ok'**si es cierto devuelve el ok
  : ** separa lo cierto de lo incierto 
 'ko') **si no se cuemple la condicion devuelve ko

 despues cerramos php  ?>  cerramos las comillas y la etiqueta inicial ">
 pasamos el comentario de dentro de la etiqueta y cerramos la otra </div> 

 Eso significa que lo que devuelva ok o ko, pasa a formar parte de la class del stylo y por 
 eso muestra el resultado con los colores. -->

</body>
</html>