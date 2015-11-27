<?php	
        require('lib/cabecera.php');
		require('lib/menu.php');
		require('lib/Juego.php');
		require('lib/Jugador.php');
		
		session_start();
		
		cabecera();
		//menu($_SESSION['Juego']->getIdioma());
		var_dump($_SESSION['Jugador']);
	    if($_SESSION['Jugador']==null){
	        header('Location: index.php');
	    }
	    
?>

<div class="container">
 <form role="form" action="contenido.php" method="post" id="datos">  
                <h1>Datos del Jugador</h1>
            <div class="form-group">
                <label for="nombre">Nombre (Obligatorio)</label>
                <input type="text" class="form-control" name="nombrePerf" value="<?=$_SESSION['Jugador']->getNombre()?>"/>
            </div>
            <div class="form-group">
                <label for="apellido">Apellidos</label>
                <input type="text" class="form-control" name="apellidoPerf" value="<?= $_SESSION['Jugador']->getApellido()?>"/>
            </div>
            <div class="col-md-4 form-group ">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edadPerf" value="<?= $_SESSION['Jugador']->getEdad()?>"/>
            </div>
            <div class="row"></div>
            <div>
                 <h4>Tipos De Juego**</h4>
               
                <?php if($_SESSION['Juego']->getJuego()==Junior){?>
                 
                <label><input type="radio" name="juegoPerf" value="Junior" checked>Junior</label>
                <label><input type="radio" name="juegoPerf" value="Junior+">Junior+</label>
                <?php
                }else{?>
                     <label><input type="radio" name="juegoPerf" value="Junior" >Junior</label>
                <label><input type="radio" name="juegoPerf" value="Junior+" checked>Junior+</label>
                <?php
                }
                ?>
                
                <br>
                <?php if($_SESSION['Juego']->getIdioma()==esp){?>
                <h4>Idioma</h4>
                <label><input type="radio" name="idiomaPerf" value="esp" checked>Español</label>
    			<label><input type="radio" name="idiomaPerf" value="eng">Ingles</label>
    			<?php
                }else{?>
                <label><input type="radio" name="idiomaPerf" value="esp">Español</label>
    			<label><input type="radio" name="idiomaPerf" value="eng" checked>Ingles</label>
                 <?php
                }
                ?>
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