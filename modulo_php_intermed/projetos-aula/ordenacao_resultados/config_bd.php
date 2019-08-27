<?php
//Iniciando conexão BD no servidor
$dsn = "mysql:dbname=projeto_ordenar;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>