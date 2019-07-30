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
        if (isset($_GET['id']) && empty($_GET['id']) == false) {
            $id = addslashes($_GET['id']);
            
            $sql = "DELETE FROM usuarios WHERE id='$id'";
            $pdo->query($sql);

            header("Location: index.php");
        } else {
            header("Location: index.php");
        }
    ?>
</body>
</html>