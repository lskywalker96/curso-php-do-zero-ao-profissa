<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando dados com o PDO - Módulo PHP Intermediário</title>
</head>
<body>
<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";
    
try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);

    $user_nome = "Alessandra Íris";
    $user_email = "";
    $user_senha = md5("");


    $sql = "UPDATE usuarios SET nome = '$user_nome' WHERE id = 6";
    $pdo->query($sql);

    echo "Usuário alterado com sucesso!";
} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>
</body>
</html>