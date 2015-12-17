<?php

    require_once('auth.php');
    
    function formInicial(){
        //editaSesion();
?>
<div class="container-fluid">  
    <div class="row">
        <div class="col-md-offset-4 col-md-3">
            <img src="imagen/mathdice.png"></img>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-offset-3 col-md-5">
          <form role="form" action="contenido.php" method="post" id="datos">  
                <h1>Datos del Jugador</h1>
            <div class="form-group">
                <label for="nombre">Nombre (Obligatorio)</label>
                <input type="text" class="form-control" name="nombre" required/>
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
                <label><input type="radio" name="juego" value="Junior" required>Junior</label>
                <label><input type="radio" name="juego" value="Junior+" required>Junior+</label>
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