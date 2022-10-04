<h3>Alta de categoria</h3>
<form method="post" enctype="multipart/form-data" action="acciones/categorias_agregar.php">
	<div>
		<span>Nombre</span><input type="text" name="categoria" placholder="Nombre categoria" />
	</div>
	<div>
		<span>Imagen</span><input type="file" name="foto" accept="image/jpeg,image/png" />
	</div>
	<div>
		<input type="submit" value="Guardar" class='left' />
		<input type="button" value="Cancelar" onclick="location.href='index.php?categoria=categorias'" />
	</div>
</form>