<?php 
session_start( ); //habilito las sesiones (para luego eliminarlas)
session_destroy( ); //cierra las sessiones (las borra);
header( "Location: ../index.php" );
?>