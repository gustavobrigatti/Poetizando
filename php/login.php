<?php
    session_start();
    include_once("../bd/conexao.php");

    $_email = $_POST['emaillogin'];
    $_senha = $_POST['senhalogin'];

    $_senha = md5($_senha);
    
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
    }else{
        $_sql = "SELECT * FROM funcionario WHERE emailFuncionario = '$_email' AND senhaFuncionario = '$_senha'";
        $_query = mysqli_query($_conexao,$_sql);
        $_line = mysqli_fetch_array($_query);
        if($_email == $_line['emailFuncionario'] and $_senha == $_line['senhaFuncionario']){
            $_id = $_line['CodAdm'];
            $_email = $_line['emailFuncionario'];
            $_nome = $_line['nomeFuncionario'];
            $_SESSION['logado'] = 2;
            $_SESSION['id'] = $_id;
            $_SESSION['emailFuncionario'] = $_email;
            $_SESSION['adm'] = true;
            header("location: ../index.php");
        }else{
            echo  "<script>alert('Erro de Login');</script>";
            header("location: ../index.php?error=nologin");
        }
    }
?>