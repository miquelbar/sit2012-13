<?php
echo $this->Session->flash('auth');
?>
<div class="span6 offset3">
	<h1>Identificación de Usuario</h1>
	<div class="alert alert-success span5">
		Para poder acceder al sistema debes identificarte. <strong>¡Muchas gracias!</strong>
	</div>
	<form id="UsuarioLoginForm" class="form-horizontal" action="" method="post">
		<div class="control-group">
			<label class="control-label">Email</label>
				<div class="controls">
				<input type="text" id="correo" name="data[USUARIO][correo]" placeholder="Email">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Password</label>
			<div class="controls">
				<input type="password" id="clave" name="data[USUARIO][clave]" placeholder="Contraseña">
			</div>
		</div>
		<div class="controls">
			<button type="submit" value="Usuario" class="btn btn-primary btn-large">Login</button>
		</div>
	</div>	
</div>