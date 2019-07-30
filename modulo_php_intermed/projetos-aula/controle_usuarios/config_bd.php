<?php
//Iniciando conexão BD no servidor
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);
} 
catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>