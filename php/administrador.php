<?php
    session_start();
    if($_SESSION['logado'] != 2){
        header("location: ../index.php");
    }else{
?>
<!DOCTYPR html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Poetizando</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
    </head>
    <body>         
        <div id="transbox">
            <table width="100%" align="center" id="borda">
                <tr>
                    <td align="center">
                        <br><br><br>
                        <p id="alinhaP">LISTAR USUÁRIOS</p>
                        <hr id="hr">
                        <a href="?page=7"><img src="img/list.png" align="center"></a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
<?php
    }
?>