 <?php
   
    if(isset($_GET["nombre"])){
        $nombre=$_GET["nombre"];
    }else{
        $nombre="No hay nombre definido";
    }
     
    if(isset($_GET["apellido"])){
        $apellido=$_GET["apellido"];
    }else{
       $apellido=$_GET["No hay apellido definido"];
    }
    
        
     ?>

<!DOCTYPE html>
<html>
    <head>
       <title>GET</title>
    </head>
    <body>
            
        <?php    
            if(!isset($_GET["nombre"])){
        ?>    
           <a href="index2.php?nombre=Fran&apellido=Perez">Paso de datos</a> 
        <?php    
            }else{
                 echo "Nombre ".$nombre."<br>"." Apellidos ".$apellido; 
            }
        ?>    
    </body>
</html>