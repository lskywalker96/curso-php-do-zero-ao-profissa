<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserindo dados com o PDO - Módulo PHP Intermediário</title>
</head>
<body>
<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";
    
try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);

    $user_nome = "Alessandra Íris";
    $user_email = "ale_iris@mail.com";
    $user_senha = md5("alessandra");


    $sql = "INSERT INTO usuarios SET nome = '$user_nome', email='$user_email', senha='$user_senha'";
    $sql = $pdo->query($sql);

    echo "Usuário inserido: ".$pdo->lastInsertId();
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>
</body>
</html>