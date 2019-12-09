<?php
    session_start();
    if ( isset($_SESSION['logado']) ){
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
                        <?php
                            include_once("bd/conexao.php");
                            $_CodPoema = $_GET['CodPoema'];
                            if(isset($_GET['CodPoema'])){
                                $_VerificaPag = $_GET['VerificaPag'];
                                $_sql = "SELECT * FROM poemas WHERE CodPoema = '$_CodPoema'";
                                $_query = mysqli_query($_conexao,$_sql);
                                $_line = mysqli_fetch_array($_query);
                                $_idUsu = $_line['CodUsuario'];
                        ?>
                        <form method="post" action="php/atualizapoema.php?VerificaPag=<?php echo $_VerificaPag; ?>&CodPoema=<?php echo $_CodPoema; ?>&CodUsuario=<?php echo $_idUsu ?>" name="formulario">
                            <p><br>QUER COMPARTILHAR POEMAS COM NOSSOS USUÁRIOS?<br><br>
                                PREENCHA ABAIXO E PUBLIQUE SUAS RIMAS FAVORITAS.</p>
                            <br><hr id="hr"><br>
                            <p align="center">Nome do autor: <br><input align="center" type="text" name="nomea" value="<?php echo $_line['NomeDoAutor'] ?>" placeholder="Nome do autor.." id="form" required></p><br><br>
                            <p align="center">Nome do poema:  <br><input type="text" name="nomep" placeholder="Nome do poema.." value="<?php echo $_line['NomeDoPoema'] ?>" id="form" required></p><br>
                            <p align="center">Tipo do Poema <br></p><hr id="hr">
                            <link href="css/publicar.css" rel="stylesheet" type="text/css">
                            <div id="publicar" align="center">
                                <table width="90%" id="alinhaP" align="center" border="0">
                                    <?php
                                        if($_line['CodTipos'] == 1){
                                    ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio" checked/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio"/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio"/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio"/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio"/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }else if($_line['CodTipos'] == 2){
                                    ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio"/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio" checked/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio"/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio"/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio"/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }else if($_line['CodTipos'] == 3){
                                    ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio"/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio"/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio" checked/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio"/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio"/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }else if($_line['CodTipos'] == 4){
                                    ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio"/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio"/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio"/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio" checked/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio"/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }else{
                                    ?>
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio"/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio"/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio"/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio"/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio" checked/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </div><br><br>
                            <p align="center">Escreva aqui o poema:</p>
                            <p align="center">
                                <textarea name="poema" id="ta" placeholder="Escreva aqui o poema.."  required><?php echo $_line['Texto'] ?>
                                </textarea>
                            </p>
                            <p><input type="reset" value="Apagar" id="btn"><input type="submit" value="Enviar" id="btn"></p>
                        </form>
                        <?php
                            }else{
                        ?>
                        <form method="post" action="php/inserepoema.php" name="formulario">
                            <p><br>QUER COMPARTILHAR POEMAS COM NOSSOS USUÁRIOS?<br><br>
                                PREENCHA ABAIXO E PUBLIQUE SUAS RIMAS FAVORITAS.</p>
                            <br><hr id="hr"><br>
                            <p align="center">Nome do autor: <br><input align="center" type="text" name="nomea" placeholder="Nome do autor.." id="form" required></p><br><br>
                            <p align="center">Nome do poema:  <br><input type="text" name="nomep" placeholder="Nome do poema.." id="form" required></p><br>
                            <p align="center">Tipo do Poema <br></p><hr id="hr">
                            <link href="css/publicar.css" rel="stylesheet" type="text/css">
                            <div id="publicar" align="center">
                                <table width="90%" id="alinhaP" align="center" border="0">
                                    <tr>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="1" id="radio1" class="radio" checked/>
                                                <label for="radio1">Românticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="radio" name="tipos" value="2" id="radio2" class="radio"/>
                                                <label for="radio2">Políticos</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="3" id="radio3" class="radio"/>
                                                <label for="radio3">Haikais</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="4" id="radio4" class="radio"/>
                                                <label for="radio4">Concreta</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div>	
                                                <input type="radio" name="tipos" value="5" id="radio5" class="radio"/>
                                                <label for="radio5">Outros</label>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div><br><br>
                            <p align="center">Escreva aqui o poema:</p>
                            <p align="center"><textarea name="poema" id="ta" placeholder="Escreva aqui o poema.." required></textarea></p>
                            <p><input type="reset" value="Apagar" id="btn"><input type="submit" value="Enviar" id="btn"></p>
                        </form>
                        <?php
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
<?php
    }else{
        header("location: ../index.php");
    }
?>