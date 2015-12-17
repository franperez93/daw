<?php

include('Jugador.php');
include('Juego.php');
require('conexionBd.php');

session_start();


    function creamosSesion(){

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
     
    }
?>