<?php 
$accion = isset( $_GET['accion'] ) ? $_GET['accion'] : 'listado';

switch( $accion ){
	case 'alta': include( 'formulario_alta.php' ); break;
	case 'editar': include( 'formulario_editar.php' ); break;
	case 'listado': include( 'listado.php' ); break;
}
?>