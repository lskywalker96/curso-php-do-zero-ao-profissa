<?php
    require 'config_bd.php';

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];

        $sql = $pdo->prepare("INSERT INTO comentarios (data_mensagem, nome, mensagem) VALUES (now(), :nome, :msg) ");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":msg", $mensagem);
        $sql->execute();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de comentários - Módulo PHP Intermediário</title>
    <style>
        .exibir_comentario{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <fieldset>
        <form method="post">
            <Label>Nome:</Label><br>
            <input type="text" name="nome" id="nome"><br><br>
            <Label>Mensagem:</Label><br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea><br><br>
            <input type="submit" value="Enviar Mensagem">
        </form>
    </fieldset>
    <div class="exibir_comentario">
        <?php
            $sql = "SELECT * FROM comentarios ORDER BY data_mensagem DESC";
            $sql = $pdo->query($sql);

            if ($sql->rowCount() > 0){
                foreach ($sql->fetchAll() as $mensagem):?>
                    <strong><?php echo $mensagem['nome']; ?></strong><br>
                    <div><?php echo $mensagem['mensagem']?></div><hr>
                <?php endforeach;
            } else {
                echo "Não há comentários!";
            }
        ?>
    </div>
</body>
</html>