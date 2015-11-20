<!DOCTYPE html>
<html>
    <head>
       <title>Peticion Formulario</title>
    </head>
    <body>
          
     <?php
                
   
    if(isset($_GET)){
       echo "El nombre de la persona es: ".$_GET['nombre'];
       echo "<br>";
       echo "El nombre de la persona es: ".$_GET['apellido'];
        echo "<br>";
       echo "Su sexo es: ".$_GET['sexo'];
    }
    
    ?>
          
            
    </body>
</html>