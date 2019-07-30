<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";
    
try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);
    
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        foreach ($sql->fetchAll() as $usuario) {
            echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br/>";
        }
    } else {
        echo "Não há usuários cadastrados!";
    }
    
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>