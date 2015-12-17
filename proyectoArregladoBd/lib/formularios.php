<?php

    require_once('auth.php');
    var_dump($jugadorBd);
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
               <h2>Datos del Jugador</h2>
            <br>
            <div class="form-group col-md-5">
                <label for="nombre">Nombre (Obligatorio)</label> 
                <input type="text" class="form-control" name="nombre" placeholder="Obligatorio!!" required/>
            </div>
            <div class="form-group col-md-5">
                <label for="apellido">Apellidos</label>
                <input type="text" class="form-control" name="apellido"/>
            </div>
            <div class="col-md-3 form-group ">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad"/>
            </div>
            <div class="col-md-7 col-md-offset-1 form-group ">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Obligatorio!!" required/>
            </div>
    <div class="row">
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
        <input type="hidden" name="accion" value="datosUsuario"/>
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