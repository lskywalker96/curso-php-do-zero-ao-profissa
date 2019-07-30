<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia - Módulo PHP Intermediário</title>
</head>
<body>
    <?php
        $nome = "Lucas";
        $nome_cripto_md5 = md5($nome);
        $nome_cripto_64 = base64_encode($nome);

        echo "Meu nome:".$nome."<br/>";
        echo "Meu nome criptografado (md5):".$nome_cripto_md5."<br/>";
        echo "Meu nome criptografado (base64_encode):".$nome_cripto_64."<br/>";
    ?>
</body>
</html>