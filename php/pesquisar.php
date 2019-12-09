<?php
    session_start();
    $_pesquisarFirst = $_POST['pesquisar'];
    $_pesquisarFirst = strtoupper($_pesquisarFirst);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Poetizando</title>
        <link type="text/css" rel="stylesheet" href="../css/estilo.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
    </head>
    <body>              
        <div id="transbox">
            <table width="100%" align="center" id="borda">
                <tr>
                    <td align="center" id="alinha">
                        <p><br>POEMAS ENCONTRADOS<br><br</p><br>
                        <!--<form action="demo_form.asp">
                            <p align="right">Classificar por:
                                <select name="classifica" id="select">
                                    <option value="Todos">Todos</option>
                                    <option value="Romanticos">Românticos</option>
                                    <option value="Politicos">Políticos</option>
                                    <option value="Haikais">Haikais</option>
                                    <option value="PoesiaConcreta">Poesia Concreta</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </p>
                        </form>-->
                        <?php
                            include_once("bd/conexao.php");
                            $_sql = "SELECT DISTINCT u.nome, t.TipoPoema, p.CodPoema, p.NomeDoPoema, p.NomeDoAutor, p.Texto FROM usuario u, tipo t, poemas p
                                    WHERE p.CodUsuario=u.CodUsuario AND p.CodTipos=t.CodTipo AND upper(p.NomeDoPoema) LIKE '%$_pesquisarFirst%'";
                            $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
                            while($_line = mysqli_fetch_array($_query)){
                        ?>
                        <hr id="hr">
                        <table width="75%" align="center">
                            <tr>
                                <td align="center">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <p align="left">Usuário que publicou: <?php echo $_line['nome'];?></p>
                                            </td>
                                            <td>
                                                <p align="right">Gênero: <?php echo $_line['TipoPoema'];?>
                                                    <a title="Imprimir" target="_blank" href="php/pdfpoema.php?CodPoema=<?php echo $_line['CodPoema']; ?>">
                                                        <img style="padding-left: 5px; " src="img/pdfmini.png">
                                                    </a>
                                                    <?php
                                                        if($_SESSION['logado'] == 2){
                                                    ?>
                                                    <a title="Editar" href="?page=2&CodPoema=<?php echo $_line['CodPoema']; ?>&VerificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lapis.png">
                                                    </a>
                                                    <a title="Excluir" href="php/excluir.php?CodPoema=<?php echo $_line['CodPoema']; ?>&verificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lixeira.png">
                                                    </a>
                                                    <?php
                                                        }
                                                    ?>
                                                </p>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <p id="alinhaP"><?php echo $_line['NomeDoPoema'];?><br><br><br>
                                    <?php 
                                        $Texto = $_line['Texto'];
                                        $Texto =  nl2br($Texto);
                                        echo $Texto;
                                    ?>
                                    <p align="right"><?php echo $_line['NomeDoAutor'];?></p></p>
                                </td>
                            </tr>
                        </table>
                        <?php
                            }
                        ?>
                        <?php
                            include_once("bd/conexao.php");
                            $_sql = "SELECT DISTINCT u.nome, t.TipoPoema, p.NomeDoPoema, p.NomeDoAutor, p.Texto, p.CodPoema FROM usuario u, tipo t, poemas p
                                    WHERE p.CodUsuario=u.CodUsuario AND p.CodTipos=t.CodTipo AND upper(p.NomeDoAutor) LIKE '%$_pesquisarFirst%'";
                            $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
                            while($_line = mysqli_fetch_array($_query)){
                        ?>
                        <hr id="hr">
                        <?php
                            if($_SESSION['logado'] == 1 || $_SESSION['logado'] == null){
                        ?>
                        <table width="75%" align="center">
                            <tr>
                                <td align="center">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <p align="left">Usuário que publicou: <?php echo $_line['nome'];?></p>
                                            </td>
                                            <td>
                                                <p align="right">Gênero: <?php echo $_line['TipoPoema'];?>
                                                    <a title="Imprimir" target="_blank" href="php/pdfpoema.php?CodPoema=<?php echo $_line['CodPoema']; ?>">
                                                        <img style="padding-left: 5px; " src="img/pdfmini.png">
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <p id="alinhaP"><?php echo $_line['NomeDoPoema'];?><br><br><br>
                                    <?php 
                                        $Texto = $_line['Texto'];
                                        $Texto =  nl2br($Texto);
                                        echo $Texto;    
                                    ?>
                                    <p align="right"><?php echo $_line['NomeDoAutor'];?></p></p>
                                </td>
                            </tr>
                        </table>
                        <?php
                            }else if($_SESSION['logado'] == 2){
                        ?>
                        <table width="75%" align="center">
                            <tr>
                                <td align="center">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <p align="left">Usuário que publicou: <?php echo $_line['nome'];?></p>
                                            </td>
                                            <td>
                                                <p align="right">Gênero: <?php echo $_line['TipoPoema'];?>
                                                    <a target="_blank" href="php/pdfpoema.php?CodPoema=<?php echo $_line['CodPoema']; ?>">
                                                        <img title="Imprimir" style="padding-left: 5px; " src="img/pdfmini.png">
                                                    </a>
                                                    <a title="Editar" href="?page=2&CodPoema=<?php echo $_line['CodPoema']; ?>&VerificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lapis.png">
                                                    </a>
                                                    <a title="Excluir" href="php/excluir.php?CodPoema=<?php echo $_line['CodPoema']; ?>&verificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lixeira.png">
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <p id="alinhaP"><?php echo $_line['NomeDoPoema'];?><br><br><br>
                                    <?php 
                                        $Texto = $_line['Texto'];
                                        $Texto =  nl2br($Texto);
                                        echo $Texto; 
                                    ?>
                                    <p align="right"><?php echo $_line['NomeDoAutor'];?></p></p>
                                </td>
                            </tr>
                        </table>
                        <?php
                            }
                        ?>
                        <?php
                            }
                        ?>
                        <hr id="hr">
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>