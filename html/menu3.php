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
                        <li><a href="?page=2">Publicar</a></li>
                        <li><a href="?page=5&ContPoema=3">Meus Poemas</a></li>
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
                            <a href="#" class="dropdown-toggle" action="login.php" data-toggle="dropdown"><b><?php echo $_SESSION['email']; ?></b><span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <style>
                                                A:link {COLOR:black;text-decoration:none;font-weight: bold;}
                                                A:visited {COLOR:black;text-decoration:none;font-weight: bold;}
                                                A:hover {COLOR:#515151;text-decoration:none;font-weight: bold;}
                                            </style>
                                            <a href="?page=7">Minha conta</a>
                                            <br><br>
                                            <a href="?page=6">Trocar senha</a>
                                            <br><br>
                                            <form class="form" role="form" method="post" name="formlogin" id="idformlogin" action="php/logout.php" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                     <button type="submit" class="btn btn-primary btn-block" style="background-color: #636363;border-color: #000;">Sair</button>
                                                </div>
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