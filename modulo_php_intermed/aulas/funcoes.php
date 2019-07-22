<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Módulo PHP Intermediário</title>
</head>
<body>
    <?php
        function somarNumero($x, $y) {
            return $x + $y;
        }
        $resultado = somarNumero(10, 200);
        echo $resultado;
    ?>
</body>
</html>