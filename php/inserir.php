<?php
    session_start();
    include_once("../bd/conexao.php");
    
    $_nome    = $_POST['nome'];
    $_email = $_POST['email'];
    $_datanasc = $_POST['datanasc'];
    $_senha = $_POST['senha'];

    $_senha = md5($_senha);
    
    $_sql = "INSERT INTO usuario (nome , email , senha , datadenascimento) VALUES ('$_nome' , '$_email' , '$_senha' , '$_datanasc')";

    $_query = mysqli_query($_conexao , $_sql) or die(mysqli_error($_conexao));

    $_sql = "SELECT * FROM usuario WHERE email = '$_email' AND senha = '$_senha'";
    $_query = mysqli_query($_conexao,$_sql);
    $_line = mysqli_fetch_array($_query);
    if($_email == $_line['email'] and $_senha == $_line['senha']){
        $_id = $_line['CodUsuario'];
        $_email = $_line['email'];
        $_nome = $_line['nome'];
        $_SESSION['logado'] = 1;
        $_SESSION['id'] = $_id;
        $_SESSION['email'] = $_email;
        header("location: ../index.php");
    }

    if($_query){
        header("location: ../index.php");
    }else{
        header("location: ../html/falhou.html");
    }
?>