<?php
    session_start();
    ini_set('default_charset', 'UTF-8');
    if(!isset($_SESSION['logado'])){
            header("location: ../index.php");
    }else{
        $a = $_GET['a'];
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
                        <p><br>MINHA CONTA</p>
                        <br><hr id="hr"><br>
                        <?php
                            if(isset($a)){
                                if(!isset($_SESSION['adm'])){
                                    $_id = $_SESSION['id'];
                                    include_once("bd/conexao.php");
                                    $_sql = "SELECT * FROM usuario WHERE CodUsuario = '$_id'";
                                    $_query = mysqli_query($_conexao,$_sql);
                                    $_line = mysqli_fetch_array($_query);  
                        ?>
                        <form method="post" action="php/atualizainformacoes.php" name="formulario">
                            <p align="center">
                                Nome: <br>
                                <input align="center" type="text" name="nome" value="<?php echo $_line['nome'] ?>" placeholder="Nome do autor.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                E-Mail: <br>
                                <input disabled align="center" type="email" name="email" value="<?php echo $_line['email'] ?>" placeholder="E-Mail.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                Data de Nascimento: <br>
                                <input align="center" type="date" name="datanasc" value="<?php echo $_line['datadenascimento'] ?>" placeholder="Data de Nascimento.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                <input type="submit" value="Atualizar Informações" id="btn">
                            </p>
                        </form>
                        <?php
                                }else{
                                    $_id = $_SESSION['id'];
                                    include_once("bd/conexao.php");
                                    $_sql = "SELECT * FROM funcionario WHERE CodAdm = '$_id'";
                                    $_query = mysqli_query($_conexao,$_sql);
                                    $_line = mysqli_fetch_array($_query);
                        ?>
                        <form method="post" action="php/atualizainformacoes.php" name="formulario">
                            <p align="center">
                                Nome: <br>
                                <input align="center" type="text" name="nome" value="<?php echo $_line['nomeFuncionario'] ?>" placeholder="Nome do autor.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                E-Mail: <br>
                                <input disabled align="center" type="email" name="email" value="<?php echo $_line['emailFuncionario'] ?>" placeholder="E-Mail.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                Data de Nascimento: <br>
                                <input align="center" type="date" name="datanasc" value="<?php echo $_line['datadenascimentoFuncionario'] ?>" placeholder="Data de Nascimento.." id="form" required>
                            </p><br><br>
                            <p align="center">
                                <input type="submit" value="Atualizar Informações" id="btn">
                            </p>
                        </form>
                        <?php
                                }
                        ?>
                        <?php
                            }else{
                        ?>
                        <?php
                            if(!isset($_SESSION['adm'])){
                                $_id = $_SESSION['id'];
                                include_once("bd/conexao.php");
                                $_sql = "SELECT * FROM usuario WHERE CodUsuario = '$_id'";
                                $_query = mysqli_query($_conexao,$_sql);
                                $_line = mysqli_fetch_array($_query);
                        ?>
                        <table width="60%" align="center">
                            <tr>
                                <td id="alinha">
                                    <p align="left">Nome: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['nome'] ?></p><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td id="alinha">
                                    <p align="left">E-Mail: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['email'] ?></p><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td id="alinha">
                                    <p align="left">Data de Nascimento: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['datadenascimento'] ?></p><br><br>
                                </td>
                            </tr>
                        </table>
                        <p>
                            <table width="100%" align="center">
                                <tr>
                                    <td align="right" style="padding-right: 5px;">
                                        <form method="post" action="?page=6" name="formulario">
                                            <input type="submit" value="Trocar Senha" id="btn">
                                        </form>
                                    </td>
                                    <td align="left" style="padding-left: 5px;">
                                        <form method="post" action="?page=7&a=1" name="formulario">
                                            <input type="submit" value="Editar Informações" id="btn">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </p>
                        <?php
                            }else{
                                $_id = $_SESSION['id'];
                                include_once("bd/conexao.php");
                                $_sql = "SELECT * FROM funcionario WHERE CodAdm = '$_id'";
                                $_query = mysqli_query($_conexao,$_sql);
                                $_line = mysqli_fetch_array($_query);
                        ?>
                        <table width="60%" align="center">
                            <tr>
                                <td id="alinha">
                                    <p align="left">Nome: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['nomeFuncionario'] ?></p><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td id="alinha">
                                    <p align="left">E-Mail: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['emailFuncionario'] ?></p><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td id="alinha">
                                    <p align="left">Data de Nascimento: </p><br><br>
                                </td>
                                <td id="alinha">
                                    <p align="right"><?php echo $_line['datadenascimentoFuncionario'] ?></p><br><br>
                                </td>
                            </tr>
                        </table>
                        <p>
                            <table width="100%" align="center">
                                <tr>
                                    <td align="right" style="padding-right: 5px;">
                                        <form method="post" action="?page=8" name="formulario">
                                            <input type="submit" value="Trocar Senha" id="btn">
                                        </form>
                                    </td>
                                    <td align="left" style="padding-left: 5px;">
                                        <form method="post" action="?page=9&a=1" name="formulario">
                                            <input type="submit" value="Editar Informações" id="btn">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </p>
                        <?php
                            }
                        ?>
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
    }
?>