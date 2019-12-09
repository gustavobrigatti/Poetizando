<?php
    session_start();
    include_once("../bd/conexao.php");
    $_CodUsu = $_GET['id'];
    $_sql = "DELETE FROM usuario WHERE CodUsuario = '$_CodUsu'";
    $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
    if($_query){
        header("location: ../index.php?page=7");
    }
?>