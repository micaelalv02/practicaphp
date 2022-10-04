<?php 
$c = "SELECT * FROM categorias ORDER BY CATEGORIA";
$f = mysqli_query($cnx, $c);
?>
<div><a id="alta" href='index.php?categoria=categorias&accion=alta'>Agregar categorias</a></div>


<?php 
if( isset( $_GET['rta'] ) ){
	if( $_GET['rta'] == 'ok' ){
		echo '<p class="ok">La acción se realizó satisfactoriamente</p>';
	}else{
		echo '<p class="error">';
		if( isset( $_GET['motivo'] ) ){
			echo $_GET['motivo'];
		}else{
			echo 'La acción falló por algún motivo';
		}
		echo '</p>';
	}
}
?>

<table>
	<thead>
		<th>Categoria</th>
		<th>Acciones</th>
	</thead>
	<tbody>
	<?php while($a = mysqli_fetch_assoc($f) ): ?> 
	<tr>
		<td><?php echo $a['CATEGORIA']; ?></td>
		<td>
			<a href='index.php?categoria=categorias&accion=editar&id=<?php echo $a['ID']; ?>' class='edit'>editar</a>
			<a href='acciones/categorias_eliminar.php?id=<?php echo $a['ID']; ?>' class='delete'>eliminar</a>
		</td>
	</tr>
	<?php 
	endwhile; 
	mysqli_free_result($f);
	?>
	</tbody>
</table>