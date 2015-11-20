<!DOCTYPE html>
<html>
    <head>
       <title>Peticion Formulario</title>
    </head>
    <body>
          
     <?php
                
   
        if(isset($_POST)){
          echo "El nombre de la persona es: ".$_POST['nombre'];
          echo "<br>";
          echo "El nombre de la persona es: ".$_POST['apellido'];
          echo "<br>";
          echo "Su sexo es: ".$_POST['sexo'];
        }
    
    ?>
          
            
    </body>
</html>