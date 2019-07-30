<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDOStatement & Binds - Módulo PHP Intermediário</title>
</head>
<body>
<?php

//Iniciando conexão BD no servidor
$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpswrd = "";
    
try {
    $pdo = new PDO($dsn, $dbuser, $dbpswrd);

    $nome = "Tobias Damasco";
    $email = "tobias_damasco@mail.com";
    $senha = md5("tobias");

    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    echo "Usuário cadastrado com sucesso!";


} catch (PDOException $e) {
    echo "Falhou: ".$e->getMessage();
}
?>
</body>
</html>