<?php
    session_start();
    ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!--<meta charset="utf-8">-->
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <title>Poetizando</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
        <link type="text/css" rel="stylesheet" href="css/pagination.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
    </head>
    <body>              
        <div id="transbox">
            <table width="100%" align="center" id="borda">
                <tr>
                    <td align="center" id="alinha">
                        <p><br>POEMAS PUBLICADOS POR NOSSOS USUÁRIOS<br><br</p><br>
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
                            @$_ContPoema = $_GET['ContPoema'];
                            $ContPoema = ($_ContPoema-4);
                            $z = ($_ContPoema-3);
                            include_once("php/vetorpoema.php");
                            $i = sizeof($Nome);
                            for($z; $z<= ($_ContPoema); $z++){
                                if($TipoDoPoema[$z] == null){
                                    break;
                                }
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
                                                <p align="left">Usuário que publicou: <?php echo $Nome[$z];?></p>
                                            </td>
                                            <td>
                                                <p align="right">Gênero: <?php echo $TipoDoPoema[$z];?>
                                                    <a title="Imprimir" target="_blank" href="php/pdfpoema.php?CodPoema=<?php echo $CodPoema[$z]; ?>">
                                                        <img style="padding-left: 5px; " src="img/pdfmini.png">
                                                    </a>    
                                                </p>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <p id="alinhaP"><?php echo $NomeDoPoema[$z];?><br><br><br>
                                    <?php echo $Texto[$z];?>
                                    <p align="right">Autor: <?php echo $NomeDoAutor[$z];?></p></p>
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
                                                <p align="left">Usuário que publicou: <?php echo $Nome[$z];?></p>
                                            </td>
                                            <td>
                                                <p align="right">Gênero: <?php echo $TipoDoPoema[$z];?>
                                                    <a title="Imprimir" target="_blank" href="php/pdfpoema.php?CodPoema=<?php echo $CodPoema[$z]; ?>">
                                                        <img style="padding-left: 5px; " src="img/pdfmini.png">
                                                    </a>
                                                    <a title="Editar" href="?page=2&CodPoema=<?php echo $CodPoema[$z]; ?>&VerificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lapis.png">
                                                    </a>
                                                    <a title="Excluir" href="php/excluir.php?CodPoema=<?php echo $CodPoema[$z]; ?>&verificaPag=1">
                                                        <img style="padding-left: 5px; " src="img/lixeira.png">
                                                    </a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table><br>
                                    <p id="alinhaP"><?php echo $NomeDoPoema[$z];?><br><br><br>
                                    <?php echo $Texto[$z];?>
                                    <p align="right">Autor: <?php echo $NomeDoAutor[$z];?></p></p>
                                </td>
                            </tr>
                        </table>
                        <?php
                            }
                        ?>
                        <?php
                            }
                        ?>
                        <div class="pagination">
                            <?php $ContPoema = 3; ?>
                            <a href="index.php?page=1&ContPoema=<?php echo $ContPoema; ?>" title="Início">&laquo;</a>
                            <?php
                                $i = $i/4;
                                $ContPoema = 3;
                                for($y = 0; $y < $i; $y++){
                                    if($_ContPoema == $ContPoema){
                            ?>
                            <a class="active" href="index.php?page=1&ContPoema=<?php echo $ContPoema; ?>"><?php echo ($y+1); ?></a>
                            <?php
                                    }else{
                            ?>
                            <a href="index.php?page=1&ContPoema=<?php echo $ContPoema; ?>"><?php echo ($y+1); ?></a>
                            <?php
                                    }
                                $ContPoema = $ContPoema + 4;
                                }
                            ?>
                            <a href="index.php?page=1&ContPoema=<?php echo $ContPoema-4; ?>" title="Última página">&raquo;</a>
                        </div>
                        <hr id="hr">
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>