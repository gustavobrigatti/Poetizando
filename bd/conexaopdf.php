<?php
try{
    $_db = "poetizando";
    $_user = "root";
    $_host = ":host=";
    $_password = "password";
    $_database = "dbname=";
    $_host_name = "localhost";
    $_gerenciador = "mysql";
    
    $_string_connection = $_gerenciador.$_host.$_host_name.";".$_database.$_db;
    
    $_pdo = new PDO($_string_connection , $_user , $_password);
    
    
  
}
catch(PDOException $_e)
{
    echo $_e->getMessage();
    echo $_e->getCode();
}
?>