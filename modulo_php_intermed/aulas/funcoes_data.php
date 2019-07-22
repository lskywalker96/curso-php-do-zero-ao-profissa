<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Data e Tempo - Módulo PHP Intermediário</title>
</head>
<body>
    <?php
        $data_atual = date("d/m/Y H:i:s");
        $t = time();

        echo "Hoje: ".$data_atual."<br/>";
        echo $t;

    ?>
</body>
</html>