<form method="post" action="acciones/login.php">
	<h3>Credenciales requeridas</h3>
	<?php 
	if( isset( $_SESSION['error'] ) ): 
		echo "<p class='error'>$_SESSION[error]</p>";
		unset( $_SESSION['error'] ); //elimina solo el indice error del session... variables flash
	endif; ?>
	<div>
		<span>Usuario</span>
		<input type="email" name="usuario" placeholder="usuario@email.com" />
	</div>
	<div>
		<span>Clave</span>
		<input type="password" name="clave" />
	</div>
	<div>
		<input type="submit" class='left' value="Ingresar" />
	</div>
</form>