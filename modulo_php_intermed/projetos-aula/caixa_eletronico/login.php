<?php
    session_start();
    require 'config_bd.php';

    if (isset($_POST['agencia']) && empty($_POST['agencia']) == false) {
        $agencia = addslashes($_POST['agencia']);
        $conta = addslashes($_POST['conta']);
        $senha = addslashes($_POST['senha']);

        $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia=:agencia AND conta=:conta AND senha=:senha");
        $sql->bindValue(":agencia", $agencia);
        $sql->bindValue(":conta", $conta);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();
            $_SESSION['banco'] = $sql['id'];
            header("Location: index.php");
            exit;
        }
    } else {
        # code...
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Caixa Eletrônico - Módulo PHP Intermediário</title>
</head>
<body>
    <form method="post">
        <label for="agencia">Agência: </label>
        <input type="text" name="agencia" id="agencia"><br><br>
        <label for="conta">Conta: </label>
        <input type="text" name="conta" id="conta"><br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>