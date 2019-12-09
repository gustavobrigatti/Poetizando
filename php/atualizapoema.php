<?php
    session_start();
    if(!isset($_SESSION['logado'])){
        header("location: ../index.php");
    }else{
        include_once("../bd/conexao.php");

        $_CodPoema = $_GET['CodPoema'];
        $_VerificaPag = $_GET['VerificaPag'];
        $_CodUsu = $_GET['CodUsuario'];

        $_NomeA = $_POST['nomea'];
        $_NomeP = $_POST['nomep'];
        $_Tipo = $_POST['tipos'];
        $_Poema = $_POST['poema'];

        $_sql = "UPDATE poemas SET CodUsuario = '$_CodUsu', CodTipos='$_Tipo', NomeDoPoema='$_NomeP', NomeDoAutor='$_NomeA', Texto='$_Poema' WHERE CodPoema = '$_CodPoema'";
        $_query = mysqli_query($_conexao,$_sql);
        $_line = mysqli_fetch_array($_query);
        if($_VerificaPag == 1){
            header("location: ../index.php?page=1&ContPoema=3");
        }else if($_VerificaPag == 2){
            header("location: ../index.php?page=5&ContPoema=3");
        }
    }
?>

