<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas - Módulo PHP Intermediário</title>
</head>
<body>
    <h2>Função abs</h2>
    <p>Retorna o valor absoluto de um número</p>
    <?php
        $p = 8;
        $n = -2.5;

        echo "O valor absoluto de ".$p." é ==> ".abs($p)."<br/>";
        echo "O valor absoluto de ".$n." é ==> ".abs($n)."<br/>";
    ?>
    <h2>Função round</h2>
    <p>Arredonda um número</p>
    <?php
        $r=4.629; 

        echo "O valor arredondado de ".$r." é ==> ".round($r)."<br/>";
    ?>
    <h2>Função ceil</h2>
    <p>Arredonda frações para cima</p>
    <?php
        $c=12.001; 

        echo "O valor arredondado de ".$c." é ==> ".ceil($c)."<br/>";
    ?>
    <h2>Função floor</h2>
    <p>Arredonda frações para baixo</p>
    <?php
        $f=10.999; 

        echo "O valor arredondado de ".$f." é ==> ".floor($f)."<br/>";
    ?>
    <h2>Função rand</h2>
    <p>Gera um número inteiro aleatório</p>
    <?php
        $min = 0;
        $max = 22;

        echo "Número aleatório entre ".$min." e ".$max.": ".rand($min, $max)."<br/>";
    ?>
</body>
</html>