<?php
    session_start();
    ini_set( "display_errors" , 0 ); 
    error_reporting( 0 );
?>
<!DOCTYPR html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Poetizando</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
        <link type="text/css" rel="stylesheet" href="css/slider.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="js/slider.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        
            if($_SESSION['logado'] == 1){
                include_once "html/menu3.php";
                $page = array(0 => "php/home.php", 1 => "php/poemas.php", 2=>"php/publicar.php", 3=>"php/sobre.php", 4 => "php/pesquisar.php" , 5 => "php/meuspoemas.php", 6 => "php/trocarsenha.php", 7 => "php/minhaconta.php");
                if(isset($_GET['page'])){
                    if(!empty($page[$_GET['page']])){
                        include_once $page[$_GET['page']];	
                    } else {
                        include_once "php/home.php";
                    }
                } else {
                    include_once "php/home.php";
                }
            }else if($_SESSION['logado'] == 2){
                include_once "html/menu4.php";
                $page = array(0 => "php/home.php", 1 => "php/poemas.php", 2=>"php/publicar.php", 3=>"php/sobre.php", 4 => "php/pesquisar.php" , 5 => "php/meuspoemas.php", 6 => "php/administrador.php", 7 => "php/listausuarios.php", 8 => "php/trocarsenha.php", 9 => "php/minhaconta.php");
                if(isset($_GET['page'])){
                    if(!empty($page[$_GET['page']])){
                        include_once $page[$_GET['page']];	
                    } else {
                        include_once "php/home.php";
                    }
                } else {
                    include_once "php/home.php";
                }
            }else{
                include_once "html/menu2.php";
                $page = array(0 => "php/home.php", 1 => "php/poemas.php", 2=>"php/publicar.php", 3=>"php/sobre.php", 4 => "php/pesquisar.php");
                if(isset($_GET['page'])){
                    if(!empty($page[$_GET['page']])){
                        include_once $page[$_GET['page']];	
                    } else {
                        include_once "php/home.php";
                    }
                } else {
                    include_once "php/home.php";
                }
            }
        if(isset($_GET['error'])){
        ?>
            <script>
                alert("Usuário ou Senha Incorreto");
            </script>
        <?php
        }
        ?>
    </body>
</html>