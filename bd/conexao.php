<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set( "display_errors" , 0 ); 
    error_reporting( 0 );
    $_host     = "localhost"   ;
    $_user     = "root"        ;
    $_password = "password"    ;
    $_database = "poetizando"       ;
    
    $_conexao = mysqli_connect($_host,$_user,$_password) or die(mysqli_error());

    mysqli_select_db($_conexao,$_database) or die(mysqli_error());

    mysqli_set_charset($_conexao,"utf8");
    mysql_query("SET NAMES 'utf8'");
    mysql_query('SET character_set_connection=utf8');
    mysql_query('SET character_set_client=utf8');
    mysql_query('SET character_set_results=utf8');
?>