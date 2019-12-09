<?php
    session_start();
    include_once("../bd/conexao.php");

    $_senha = $_POST['senhaAtual'];
    $_senhaNova = $_POST['confirmaSenha'];

    $_senha = md5($_senha);
    $_senhaNova = md5($_senhaNova);

    $_id = $_SESSION['id'];

    $_sql = "SELECT * FROM usuario u, funcionario f WHERE u.CodUsuario = '$_id' OR f.CodAdm = '$_id'";
    $_query = mysqli_query($_conexao,$_sql);
    $_line = mysqli_fetch_array($_query);
    if($_id == $_line['CodAdm'] and $_senha == $_line['senhaFuncionario'] and isset($_SESSION['adm'])){
        $_sql = "UPDATE funcionario SET senhaFuncionario = '$_senhaNova' WHERE CodAdm = '$_id'";
        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
        $_line = mysqli_fetch_array($_query);
        $_SESSION['trocaSenha'] = 2;
        header("location: ../index.php?page=8");
    }else if($_id == $_line['CodUsuario'] and $_senha == $_line['senha']){
        $_sql = "UPDATE usuario SET senha = '$_senhaNova' WHERE CodUsuario = '$_id'";
        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
        $_line = mysqli_fetch_array($_query);
        $_SESSION['trocaSenha'] = 1;
        header("location: ../index.php?page=6");
    }else if(isset($_SESSION['adm'])){
        $_SESSION['trocaSenha'] = 3;
        header("location: ../index.php?page=8");
    }else{
        $_SESSION['trocaSenha'] = 3;
        header("location: ../index.php?page=6");
    }
?>