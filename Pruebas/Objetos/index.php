<?php

    include ('objetos.php');
    include ('constructores.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>EJEMPLO</title>
    </head>
    <body>
        
    <?php    
        
        $jugador1 = new Jugador();
        
        $jugador1 ->setNombre("Fran");
        
        echo $jugador1->getNombre();
        
        echo Carta::TREBOL;
        echo Carta::PICA;
        
        
    ?>    
        
    </body>
</html>