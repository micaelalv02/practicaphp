<?php 
if( isset( $_GET['id'] ) ){
	include( '../../setup/configuracion.php' );
	
	if( ! verificar_seguridad( ) ){
		die( 'error en la solicitud' );
	}
	
	$id = $_GET['id'];
	$c = "UPDATE usuarios SET ESTADO=( ESTADO - 1 ) * -1 WHERE ID='$id' LIMIT 1";
	mysqli_query($cnx, $c );
}
header("Location: ../index.php?categoria=usuarios");
?>