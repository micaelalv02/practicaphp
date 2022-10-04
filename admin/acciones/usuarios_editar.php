<?php 
include( '../../setup/configuracion.php' );
$id = $_POST['id'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$estado = $_POST['estado'];

$c = "UPDATE usuarios SET EMAIL='$email', NIVEL='$nivel', ESTADO='$estado' WHERE ID='$id' LIMIT 1";
mysqli_query($cnx, $c);

if( mysqli_affected_rows( $cnx ) == 1 ){
	$_SESSION['rta'] = 'ok';
}else{
	$_SESSION['rta'] = 'error';
}

header("Location: ../index.php?categoria=usuarios");
?>