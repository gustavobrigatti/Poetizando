<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header("location: ../index.php");
    }else{
        include_once("../bd/conexao.php");
        $_CodPoema = $_GET['CodPoema'];
        $_VerificaPag = $_GET['verificaPag'];
        $_sql = "DELETE FROM poemas WHERE CodPoema = '$_CodPoema'";
        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
        if($_query){
            if($_VerificaPag == 2){
                header("location: ../index.php?page=5&ContPoema=3");
            }else if($_VerificaPag == 1){
                header("location: ../index.php?page=1&ContPoema=3");
            }
        }else{
            header("location: ../html/falhou.html");
        }
    }
?>