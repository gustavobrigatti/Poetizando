<?php
    session_start();
?>
<!DOCTYPR html>
<html lang="pt-br">
    <head>
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Poetizando</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="?page=1&ContPoema=3">Poemas</a></li>
                        <li><a href="?page=3">Sobre</a></li>
                    </ul>
                    <form class="navbar-form navbar-left" action="?page=4"x name="formpesquisa" id="formpesquisa" method="post" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="pesquisar" id="idpesquisar" placeholder="Pesquisar...">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search" style="padding: 3px;"></i></button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="padding-right: 5px;" class="glyphicon glyphicon-user"></span><b>Cadastro</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Cadastro
                                            <form class="form" role="form" method="post" accept-charset="UTF-8" action="php/inserir.php" name="forminserir" id="idforminserir">
                                                <br>
                                                <div class="form-group">
                                                     <label for="idnome">Nome</label>
                                                     <input type="text" class="form-control" name="nome" id="idnome" placeholder="Nome..." required>
                                                </div>
                                                <div class="form-group">
                                                     <label for="idemail">E-mail</label>
                                                     <input type="email" class="form-control" name="email" id="idemail" placeholder="E-mail..." required>
                                                </div>
                                                <div class="form-group">
                                                     <label for="iddatanasc">Data de nascimento</label>
                                                     <input type="date" class="form-control" name="datanasc" id="iddatanasc" placeholder="Data de nascimento..." required>
                                                </div>
                                                <div class="form-group">
                                                     <label for="idsenha">Senha</label>
                                                     <input type="password" class="form-control" name="senha" id="idsenha" placeholder="Senha..." required>
                                                </div>
                                                <div class="form-group">
                                                     <label for="idconfirmasenha">Repetir senha</label>
                                                     <input type="password" class="form-control" name="confirmasenha" id="idconfirmasenha" placeholder="Repetir senha..." required>
                                                </div>
                                                <script>
                                                    var password = document.getElementById("idsenha"),
                                                        confirm_password = document.getElementById("idconfirmasenha");

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
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block" name="btninserir" id="idbtninserir" value="Inserir" style="background-color: #636363;border-color: #000;">Cadastrar</button>
                                                </div>
                                                <!--<div class="checkbox">
                                                     <label>
                                                     <input type="checkbox"> manter-me conectado.
                                                     </label>
                                                </div>-->
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" action="login.php" data-toggle="dropdown"><span style="padding-right: 5px;" class="glyphicon glyphicon-log-in"></span><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Login
                                            <form class="form" role="form" method="post" name="formlogin" id="idformlogin" action="php/login.php" accept-charset="UTF-8" id="login-nav">
                                                <br>
                                                <div class="form-group">
                                                     <label for="idemail">E-mail</label>
                                                     <input type="email" class="form-control" name="emaillogin" id="idemail" placeholder="E-mail..." required>
                                                </div>
                                                <div class="form-group">
                                                     <label for="idsenha">Senha</label>
                                                     <input type="password" class="form-control" name="senhalogin" id="idsenha" placeholder="Senha..." required>
                                                     <!--<div class="help-block text-right"><a href="">Esqueceu a senha ?</a></div>-->
                                                </div>
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block" style="background-color: #636363;border-color: #000;">Entrar</button>
                                                </div>
                                                <!--<div class="checkbox">
                                                     <label>
                                                     <input type="checkbox"> manter-me conectado.
                                                     </label>
                                                </div>-->
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </body>
</html>