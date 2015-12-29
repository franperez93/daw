<?php

    require_once('auth.php');
    //var_dump($jugadorBd);
    function formInicial(){
       
?>
<div class="container">
    	<div class="row" id="panelLogin">
			<div class="col-md-6 col-md-offset-3">
				<img class="col-md-offset-2" src="imagen/mathdice.png"></img>
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Acceder</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Registrarse</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="contenido.php" method="post" role="form" style="display: block;">
									<input type="hidden" name="accion" value="acceso"/>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-envelope"></span>
										</div>	
										<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required>
									</div>
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-lock"></span>
										</div>	
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required>
									</div>
									<div class="form-group">
										<h4>Tipos De Juego**</h4>
										<label><input type="radio" name="juego" value="Junior" required>Junior</label>
	            						<label><input type="radio" name="juego" value="Junior+"required>Junior+</label>
            						</div>
            						<div class="form-group">
            							 <h4>Idioma</h4>
	            						<label><input type="radio" name="idioma" value="esp">Español</label>
	        							<label><input type="radio" name="idioma" value="eng">Ingles</label>
        							</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Acceder">
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" action="contenido.php" method="post" role="form" style="display: none;">
									<input type="hidden" name="accion" value="registro"/>
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombre" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="apellido" id="apellido" tabindex="1" class="form-control" placeholder="Apellidos" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="edad" id="edad" tabindex="1" class="form-control" placeholder="Edad" value="" required>
									</div>
									<div class="form-group">
										<input type="email" name="correo" id="correo" tabindex="1" class="form-control" placeholder="Email" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña" required>
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar Contraseña" required>
									</div>
									<div class="form-group">
										<h4>Tipos De Juego**</h4>
										<label><input type="radio" name="juego" value="Junior" required>Junior</label>
	            						<label><input type="radio" name="juego" value="Junior+"required>Junior+</label>
            						</div>
            						<div class="form-group">
            							 <h4>Idioma</h4>
	            						<label><input type="radio" name="idioma" value="esp">Español</label>
	        							<label><input type="radio" name="idioma" value="eng">Ingles</label>
        							</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php
}
?>