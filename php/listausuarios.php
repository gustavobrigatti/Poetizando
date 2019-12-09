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
            <br>
            <br>
            <center><a title="Imprimir" target="_blank" href="php/pdf.php"><img src="img/pdf.png" align="center"></a></center>
            <br>
            <table cellspacing="2px" cellpadding="5px" align="center" border="5px" width="90%" id="tableLista">
                    <tr>
                        <td align="center" id="lista"><b>ID</b></td>
                        <td align="center" id="lista"><b>NOME</b></td>
                        <td align="center" id="lista"><b>EMAIL</b></td>
                        <td align="center" id="lista"><b>SENHA</b></td>
                        <td align="center" id="lista"><b>DATA DE NASCIMENTO</b></td>
                        <td align="center" id="lista"><b>EXCLUIR</b></td>
                    </tr>
                    <?php
                        include_once("bd/conexao.php");
                        $_sql = "SELECT * FROM usuario";
                        $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
                        while($_line = mysqli_fetch_array($_query)){
                    ?>
                    <tr>
                        <td align="center" id="listaUsu"><?php echo $_line['CodUsuario'];?></td>
                        <td align="left" id="listaUsu"><?php echo $_line['nome'];?></td>
                        <td align="left" id="listaUsu"><?php echo $_line['email'];?></td>
                        <td align="center" id="listaUsu"><?php echo $_line['senha'];?></td>
                        <td align="center" id="listaUsu"><?php echo $_line['datadenascimento'];?></td>
                        <td align="center"><a title="Excluir Usuário" href="php/excluirUsu.php?id=<?php echo $_line['CodUsuario']?>"><img style="padding-left: 5px; " src="img/lixeira.png"></a></td>
                    </tr>
                    <?php
                        }
                    ?>
            </table>
            <br><br><br>
        </div>
    </body>
</html>
<?php
    }
?>