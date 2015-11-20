<!DOCTYPE html>
<html>
    <head>
       <title>POST</title>
    </head>
    <body>
          <form action="resultadoPost.php" method="post">
              
              Nombre: <br>
              <input type="text" name="nombre"/><br>
              Apellido: <br>
              <input type="text" name="apellido"/><br>
              <input type="radio" name="sexo" value="Hombre" checked/> Hombre
              <input type="radio" name="sexo"  value="Mujer"/>Mujer<br><br>
              <input type="submit" value="enviar"/>
          </form>
            
    </body>
</html>