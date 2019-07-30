<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Controle de Usuários - Módulo PHP Intermediário</title>
    <link rel="stylesheet">
</head>
<body>
    <?php
        require 'config_bd.php';
        $id = 0;

        if (isset($_GET['id']) && empty($_GET['id']) == false) {
            $id = addslashes($_GET['id']);
        }

        if (isset($_POST['nome']) && empty($_POST['nome']) == false){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
            $pdo->query($sql);

            header("Location: index.php");
        }

        
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $pdo->query($sql);

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
        } else {
            header("Location: index.php");
        }
    ?>
    <form method="post">
        <Label for="nome">Nome:</Label>
        <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" id="nome"><br/>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" value="<?php echo $dado['email']; ?>"><br/>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>