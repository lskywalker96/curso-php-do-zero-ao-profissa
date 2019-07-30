<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";
    
try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);
    echo "Conexão estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>