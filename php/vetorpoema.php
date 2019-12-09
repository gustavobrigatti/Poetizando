<?php
    $_Cont = 0;
    $Nome = array();
    $TipoPoema = array();
    $NomeDoPoema = array();
    $NomeDoAutor = array();
    $Texto = array();
    $CodPoema = array();
    include_once("bd/conexao.php");
    $_sql = "SELECT u.nome, t.TipoPoema, p.NomeDoPoema, p.NomeDoAutor, p.Texto, p.CodPoema FROM usuario u, tipo t, poemas p
            WHERE p.CodUsuario=u.CodUsuario AND p.CodTipos=t.CodTipo ORDER BY p.CodPoema desc";
    $_query = mysqli_query($_conexao,$_sql) or die(mysqli_error());
    while($_line = mysqli_fetch_array($_query)){
        $Nome[$_Cont] = $_line['nome'];
        $TipoDoPoema[$_Cont] = $_line['TipoPoema'];
        $NomeDoPoema[$_Cont] = $_line['NomeDoPoema'];
        $NomeDoAutor[$_Cont] = $_line['NomeDoAutor'];
        $Texto[$_Cont] = $_line['Texto'];
        $Texto[$_Cont] =  nl2br($Texto[$_Cont]);
        $CodPoema[$_Cont] = $_line['CodPoema'];
        $_Cont++;
    }
?>