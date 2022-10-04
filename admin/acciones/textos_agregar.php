<?php 
include( '../../setup/configuracion.php' );
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$autor = $_POST['autor'];
$archivo = time( ).'.jpg';
$archivo_type = $_FILES['foto']['type'];
$opciones = '';

if( isset( $_POST['config'] ) ){
	$opciones = implode( ',' ,$_POST['config'] );
}

if( preg_match( "/(png|jpe?g)$/i" , $archivo_type ) ){
	

	$isJPEG = preg_match( "/jpe?g$/i", $archivo_type ); /*image/jpeg | image/png */

	$original = $isJPEG ? 
		imagecreatefromjpeg( $_FILES['foto']['tmp_name'] ):
		imagecreatefrompng( $_FILES['foto']['tmp_name'] );
	
	$ancho_o = imagesx($original);
	$alto_o = imagesy($original);
	
	$ancho_large = 1100;
	$alto_large = round( $ancho_large * $alto_o / $ancho_o );
	
	$ancho_thumb = 300;
	$alto_thumb = round( $ancho_thumb * $alto_o / $ancho_o );
	
	$large = imagecreatetruecolor( $ancho_large, $alto_large );
	$thumb = imagecreatetruecolor( $ancho_thumb, $alto_thumb );

	imagecopyresampled( $large, $original, 0,0,0,0, $ancho_large, $alto_large, $ancho_o, $alto_o );
	imagecopyresampled( $thumb, $original, 0,0,0,0, $ancho_thumb, $alto_thumb, $ancho_o, $alto_o );
	
	imagejpeg( $large, "../../uploads/posts-large/$archivo", 100 );
	imagejpeg( $thumb, "../../uploads/posts-thumbs/$archivo", 100 );
}



$c = "INSERT INTO posteos SET TITULO='$titulo', TEXTO='$texto', FKAUTOR='$autor', FOTO='$archivo', PREFERENCIAS='$opciones', FECHA_ALTA=NOW( ), ESTADO='1' ";
mysqli_query( $cnx, $c );

$id = mysqli_insert_id( $cnx );

if( isset( $_POST['categoria'] ) ){
	foreach( $_POST['categoria'] as $idc ){

		$c2 = "INSERT INTO relacion SET FKCATEGORIA='$idc', FKPOSTEO='$id' ";
		mysqli_query( $cnx, $c2 );
	}
}

header("Location: ../index.php?categoria=textos#t_$id");
?>