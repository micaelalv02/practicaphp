<?php 
include( '../../setup/configuracion.php' );
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$autor = $_POST['autor'];
$categoria = $_POST['categoria'];
$id = $_POST['id'];
$opciones = '';

if( isset( $_POST['config'] ) ){
	$opciones = implode( ',' ,$_POST['config'] );
}


$c = "UPDATE posteos SET TITULO='$titulo', TEXTO='$texto', FKAUTOR='$autor', ESTADO='1', PREFERENCIAS='$opciones' WHERE ID='$id' LIMIT 1";

mysqli_query( $cnx, $c );

$c3 = "DELETE FROM relacion WHERE FKPOSTEO='$id' ";
mysqli_query( $cnx, $c3 );

if( isset( $_POST['categoria'] ) ){
	foreach( $_POST['categoria'] as $idc ){

		$c2 = "INSERT INTO relacion SET FKCATEGORIA='$idc', FKPOSTEO='$id' ";
		mysqli_query( $cnx, $c2 );
	}
}




header("Location: ../index.php?categoria=textos#t_$id");
?>