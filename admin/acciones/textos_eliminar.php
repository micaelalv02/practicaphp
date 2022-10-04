<?php 
if( isset( $_GET['id'] ) ){
	include( '../../setup/configuracion.php' );
	$id = $_GET['id'];
	$c = "DELETE FROM posteos WHERE ID='$id' LIMIT 1";
	mysqli_query($cnx, $c );
}
header("Location: ../index.php?categoria=textos");
?>