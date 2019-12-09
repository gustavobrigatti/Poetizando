<?php
    session_start();
    ini_set('default_charset', 'UTF-8');
    include_once("../bd/conexao.php");

    $_id = $_SESSION['id'];
    $_nome = $_POST['nome'];
    $_datanasc = $_POST['datanasc'];
    
    if(!isset($_SESSION['adm'])){
        $_sql = "UPDATE usuario SET nome = '$_nome', datadenascimento = '$_datanasc' WHERE CodUsuario = '$_id'";
        $_query = mysqli_query($_conexao,$_sql);
        $_line = mysqli_fetch_array($_query);
        header("location: ../index.php?page=7");
    }else{
        $_sql = "UPDATE funcionario SET nomeFuncionario = '$_nome', datadenascimentoFuncionario = '$_datanasc' WHERE CodAdm = '$_id'";
        $_query = mysqli_query($_conexao,$_sql);
        $_line = mysqli_fetch_array($_query);
        header("location: ../index.php?page=9");
    }
?>