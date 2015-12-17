<?php
include('Jugador.php');
include('Juego.php');
require('lib/conexionBd.php');
session_start();

/*

en este documento encontraremos el formulario incial, de donde sacaremos algunos 
parametros necesarios para iniciar el juego correctammente

*/

 $db = new BaseDatos();
 
  $prueba = $db->comprobarUser($_POST['nombre']);
    var_dump($prueba);
 

function introduccion(){
    
    /*En este primer apartado, almacenamos un objeto jugador y juego dentro de el session, que hemos abierto
    previamente al inicio del php.
    
    Luego asignaremos mediante los seters, los valores i parametros a cada objeto que 
    recibiremos del formulario con un post.*/
    $_SESSION['Jugador'] = new Jugador();
    $_SESSION['Juego'] = new Juego();
     if($_POST['nombre']!=''){
        if(isset($_POST['juego'])){
        $_SESSION['Jugador']->setNombre($_POST['nombre']);
        $_SESSION['Jugador']->setApellido($_POST['apellido']);
        $_SESSION['Jugador']->setEdad($_POST['edad']);
        $_SESSION['Jugador']->setEmail($_POST['email']);
        $_SESSION['Juego']->setJuego($_POST['juego']);
            if(isset($_POST['idioma'])){
                $_SESSION['Juego']->setIdioma($_POST['idioma']);
            }else{$_SESSION['Juego']->setIdioma('esp');}
            header('Location: contenido.php');
            $db->insertarUser($_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['edad']);
            
        }else{
?>
           <script>
             alert("Te falta introducir el tipo de juego");
            </script>
            
            
<?php      
        }
     }
      var_dump( $_SESSION['Jugador']);
     
 ?>
 
<div class="container-fluid">  
 <div class="row">
    <div class="col-md-offset-4 col-md-3">
            <img src="imagen/mathdice.png"></img>
            <button class="btn btn-danger"><a href="ejemploBD.php">BBDD</a></button>
    </div>
</div>    
    <div class="row">
        
        <div class="col-md-offset-3 col-md-5">
          
          <form role="form" action="index.php" method="post" id="datos">  
                <h2>Datos del Jugador</h2>
                <br>
            <div class="form-group col-md-5">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Obligatorio!!"/>
            </div>
            <div class="form-group col-md-5 col-md-offset-1">
                <label for="apellido">Apellidos</label>
                <input type="text" class="form-control" name="apellido"/>
            </div>
            <div class="col-md-3 form-group ">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad"/>
            </div>
            <div class="col-md-7 col-md-offset-1 form-group ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Obligatorio!!"/>
            </div>
            <div class="row" >
                <div class="col-md-4 col-md-offset-1">
                     <h4>Tipos De Juego**</h4>
                    <label><input type="radio" name="juego" value="Junior">Junior</label>
                    <label><input type="radio" name="juego" value="Junior+">Junior+</label>
                </div> 
                <div class="col-md-4 col-md-offset-2">
                    <h4>Idioma</h4>
                    <label><input type="radio" name="idioma" value="esp">Español</label>
        			<label><input type="radio" name="idioma" value="eng">Ingles</label>
                </div>
                <br>
                <button type="submit" class="btn btn-danger col-md-offset-4" name='submit'>Empezar MathDice!</button>
                <div class="col-md-offset-1">
                    <br>
                    <label>Junior: Sumas y Restas</label><br>
                    <label>Junior+: Sumar, Restar, Dividir y Multiplicar</label>
                </div>
                </form>
            </div>
        </div> 
    </div>

<?php
}
?>
    
   

