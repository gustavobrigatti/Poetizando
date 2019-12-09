<?php
    session_start();
    ini_set('default_charset', 'UTF-8');
    if(!isset($_SESSION['logado'])){
            header("location: ../index.php");
    }else{
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
                        <form method="post" action="php/verificatrocarsenha.php" name="formulario">
                            <p><br>ALTERAR SENHA</p>
                            <br><hr id="hr">
                            <?php
                                if($_SESSION['trocaSenha'] == 1){
                            ?>
                            <p><label style="color: #37dd6e;">SENHA ALTERADA COM SUCESSO</label><br></p>
                            <?php
                                }else if($_SESSION['trocaSenha'] == 2){
                            ?>
                            <p><label style="color: #37dd6e;">SENHA ALTERADA COM SUCESSO</label><br></p>
                            <?php
                                }else if($_SESSION['trocaSenha'] == 3){      
                            ?>
                            <p><label style="color: #dd4a37;">SENHA INCORRETA</label><br></p>
                            <?php
                                }
                                unset( $_SESSION['trocaSenha'] );
                            ?>
                            <p align="center">Senha atual: <br><input align="center" type="password" name="senhaAtual" placeholder="Senha atual.." id="form" required></p><br><br>
                            <p align="center">Nova senha:  <br><input type="password" name="senhaNova" placeholder="Senha nova.." id="senhaNova" required></p><br>
                            <br><br>
                            <p align="center">Confirmar nova senha:  <br><input type="password" name="confirmaSenha" placeholder="Confirmar senha nova.." id="confirmaSenha" required></p><br>
                            <script>
                                var password = document.getElementById("senhaNova"),
                                    confirm_password = document.getElementById("confirmaSenha");

                                function validatePassword(){
                                    if(password.value != confirm_password.value){
                                        confirm_password.setCustomValidity("As senhas não correspondem");
                                    } else{
                                        confirm_password.setCustomValidity('');
                                    }
                                }
                                password.onchange = validatePassword;
                                confirm_password.onkeyup = validatePassword;
                            </script>
                            <p><input type="submit" value="Alterar" id="btn"></p>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
<?php
    }
?>