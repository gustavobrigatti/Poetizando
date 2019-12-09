<?php
    session_start();
    include_once("../bd/conexao.php");

    $_nomeA = $_POST['nomea'];
    $_nomeP = $_POST['nomep'];
    $_tipo = $_POST['tipos'];
    $_poema = $_POST['poema'];
    $_id = $_SESSION['id'];

    $_sql = "INSERT INTO poemas (CodUsuario , CodTipos , NomeDoPoema , NomeDoAutor, Texto) VALUES ('$_id' , '$_tipo' , '$_nomeP' , '$_nomeA' , '$_poema')";
    $_query = mysqli_query($_conexao , $_sql) or die(mysqli_error($_conexao));

    if($_query){
        header("location: ../index.php?page=1&ContPoema=3");
    }else{
        header("location: ../html/falhou.html");
    }
?>