<?php
    require 'config_bd.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Controle de Usuários - Módulo PHP Intermediário</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <table id="t01">
        <tr>
            <th>Nome</th>
            <th>Email</th> 
            <th>Ações</th>
        </tr>
        <?php
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);

            if ($sql->rowCount() > 0){
                foreach ($sql->fetchAll() as $usuario) {
                    echo '<tr>';
                    echo '<td>'.$usuario['nome'].'</td>';
                    echo '<td>'.$usuario['email'].'</td>';
                    echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
    <a href="adicionar.php">
        <button type="button" class="button1">Adicionar novo usuário</button>
    </a>
</body>
</html>