<?php
    
    require_once('lib/conexionBd.php');
    
    $db  = new BaseDatos();
    
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
       <?php 
        $db->insertarUser("pepe","addasd","muslodepollo@gmasdh.com",22);
       echo $db->usuariosHTMl();
         echo $db->comprobarUser("pepe");
        
         
         ?>
    </body>
</html>