<?php
	session_start();
	unset( $_SESSION['logado'] );
    unset( $_SESSION['id'] );
    unset( $_SESSION['email'] );
    unset( $_SESSION['adm'] );
	session_destroy();
	sleep(2);
	header( "location:../index.php" );
?>