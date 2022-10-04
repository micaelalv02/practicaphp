<?php 
$id = isset( $_GET['id'] ) ? $_GET['id'] : 0;
$c = "SELECT CATEGORIA FROM categorias WHERE ID='$id' LIMIT 1";
$f = mysqli_query( $cnx , $c );
$a = mysqli_fetch_assoc( $f );
if( ! $a ){
	echo '<h3>Error</h3>';
	echo '<p class="error">La categoria seleccionada no existe, <a href="index.php?categoria=categorias">volver al listado</a></p>';
}else{
?>
<h3>Alta de categoria</h3>
<form method="post" action="acciones/categorias_modificar.php">
	<div>
		<span>Nombre</span><input type="text" value="<?php echo $a['CATEGORIA']; ?>" name="categoria" placholder="Nombre categoria" />
	</div>
	<div>
		<input type="hidden" name="id" value='<?php echo $id; ?>' />
		<input type="submit" value="Guardar" class='left' />
		<input type="button" value="Cancelar" onclick="location.href='index.php?categoria=categorias'" />
	</div>
</form>
<?php 
}
?>