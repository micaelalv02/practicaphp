<?php 
include( '../../setup/configuracion.php' );
$nombre = $_POST['categoria'];
$foto = str_replace( "\\", "/", $_FILES['foto']['tmp_name'] );

$c = "INSERT INTO categorias SET CATEGORIA=NULLIF('$nombre', '' ), IMAGEN=LOAD_FILE( '$foto' ) ";

mysqli_query($cnx, $c );

$filas = mysqli_affected_rows( $cnx );
$estado = $filas > 0 ? 'ok' : 'error';
$motivo = '';

if( $filas == -1 ){
	if( preg_match( "/Column '([a-z]+)' cannot be null/i" , mysqli_error($cnx), $nulos ) ){
		$motivo = "&motivo=$nulos[1] no puede estar vacio";
	}
	if(  preg_match( "/Duplicate entry '(.+)' for key '([a-z]+)'/i" , mysqli_error($cnx), $duplicados ) ){
		$motivo = "&motivo=$duplicados[2] ya posee el valor $duplicados[1]";
	}
}

header("Location: ../index.php?categoria=categorias&rta=$estado$motivo");
?>