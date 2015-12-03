<?php
include('Jugador.php');
include('Juego.php');
session_start();
/*

en este documento encontraremos el formulario incial, de donde sacaremos algunos 
parametros necesarios para iniciar el juego correctammente

*/

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
        $_SESSION['Juego']->setJuego($_POST['juego']);
            if(isset($_POST['idioma'])){
                $_SESSION['Juego']->setIdioma($_POST['idioma']);
            }else{$_SESSION['Juego']->setIdioma('esp');}
            header('Location: contenido.php');
            
        }else{
?>
           <script>
             alert("Te falta introducir el tipo de juego");
            </script>
<?php      
        }
     }
 ?>
 
<div class="container-fluid">  
 <div class="row">
    <div class="col-md-offset-4 col-md-3">
            <img src="imagen/mathdice.png"></img>
    </div>
</div>    
    <div class="row">
        
        <div class="col-md-offset-3 col-md-5">
           <!-- Aqui nos podemos encontrar el formulario.
           Este actua sobre este mismo php, asi pasamos los datos, y los almacenamos
           en session y una vez tengamos esos datos pasados, ya pasaremos al siguiente
           php con un location.
           
           Obligatoriamente, el usuario tendra que introducir el nombre y tipo de juego-->
          <form role="form" action="index.php" method="post" id="datos">  
                <h1>Datos del Jugador</h1>
            <div class="form-group">
                <label for="nombre">Nombre (Obligatorio)</label>
                <input type="text" class="form-control" name="nombre"/>
            </div>
            <div class="form-group">
                <label for="apellido">Apellidos</label>
                <input type="text" class="form-control" name="apellido"/>
            </div>
            <div class="col-md-4 form-group ">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad"/>
            </div>
            <div class="row"></div>
            <div>
                 <h4>Tipos De Juego**</h4>
                <label><input type="radio" name="juego" value="Junior">Junior</label>
                <label><input type="radio" name="juego" value="Junior+">Junior+</label>
                <br>
                <h4>Idioma</h4>
                <label><input type="radio" name="idioma" value="esp">Español</label>
    			<label><input type="radio" name="idioma" value="eng">Ingles</label>
            </div>
            <br>
            <button type="submit" class="btn btn-danger" name='submit'>Enviar</button>
            <div>
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
    
   

