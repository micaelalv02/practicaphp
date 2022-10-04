<?php 
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$loginExitoso = false;

/*
//MODELO DE LOGIN SIN BASE DE DATOS, DONDE LOS USUARIOS SON UN ARRAY ASOCIATIVO
$usuarios = array( 
	'german@email.com' => '1234',
	'aida@email.com' => '4321',
	'nico@email.com' => '1111'
);

if( isset( $usuarios[ $usuario ] ) && $clave == $usuarios[ $usuario ] ){
	$loginExitoso = true; 
}
*/

include( '../../setup/configuracion.php' );
// LOGIN CONTRA LA BASE DE DATOS.
$c = "SELECT NOMBRE_USUARIO, NOMBRE, APELLIDO, AVATAR, NIVEL, EMAIL, ID FROM listado_usuarios WHERE EMAIL='$usuario' AND CLAVE= SHA1('$clave') LIMIT 1";
$f = mysqli_query($cnx, $c);
$a = mysqli_fetch_assoc($f);




if( $a ){
	$loginExitoso = true;
	$_SESSION = $a;
}else{
	$_SESSION['error'] = "Mal usuario o clave";
}

if( $loginExitoso ):
	header("Location: ../index.php?categoria=textos" );
else:
	header("Location: ../index.php" );
endif;
?>