<?php

//Abrimos o reanudamos la sesion con esta funcion:
 session_start();

//Comprobamos esta variable

if(!isset($_SESSION['contador'])){
    $_SESSION['contador']=0;
}else{
    $_SESSION['contador']++;
}
//Destruimos esta sesion

session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
    <title></title>    
    </head>
    <body>
        <?=$_SESSION['contador'];?>
        <a href="index.php">afafafa</a>
    </body>
</html>