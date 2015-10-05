<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	for($i = 1; $i<=10; $i++){
		echo $i;
		echo "<br>";
	}

	//BREAK
	for($i = 1; $i<=10; $i++){
			
		if($i>7){
			break;
		}
		echo $i;
		echo "<br>";
	}

 ?>


</body>
</html>