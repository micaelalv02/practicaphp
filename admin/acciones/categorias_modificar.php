<?php 
include( '../../setup/configuracion.php' );
$nombre = $_POST['categoria'];
$id = $_POST['id'];
$c = "UPDATE categorias SET CATEGORIA='$nombre' WHERE ID='$id' ";
mysqli_query($cnx, $c );

$filas = mysqli_affected_rows( $cnx );
$estado = $filas > 0 ? 'ok' : 'error';
if( $filas == 0 ){
	$info = mysqli_info( $cnx );
	//echo $info;
	preg_match( "/matched:\s+(\d+)\s+changed:\s+(\d+)/i", $info, $capturas );
	$matched = $capturas[1];
	$affected = $capturas[2];
	if( $matched == 0 ){ 
		$estado = 'error'; 
	}else{ 
		$estado = 'ok';
	}
}

header("Location: ../index.php?categoria=categorias&rta=$estado");
?>