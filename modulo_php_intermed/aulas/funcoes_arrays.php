<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de arrays - Módulo PHP Intermediário</title>
</head>
<body>
    <h2>Função array_keys</h2>
    <p>Retorna todas as chaves ou uma parte das chaves de um array</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        $chaves = array_keys($teste);
        print_r($chaves);
    ?>
    <h2>Função array_values</h2>
    <p>Retorna todos os valores de um array</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        $valores = array_values($teste);
        print_r($valores);
    ?>
    <h2>Função array_pop</h2>
    <p>Retira um elemento do final do array</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        print_r($teste);
        echo "<br/><br/>";
        array_pop($teste);
        print_r($teste);
    ?>
    <h2>Função array_shift</h2>
    <p>Retira o primeiro elemento do array</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        print_r($teste);
        echo "<br/><br/>";
        array_shift($teste);
        print_r($teste);
    ?>
    <h2>Função asort</h2>
    <p>Ordena um array mantendo a associação entre índices e valores</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        print_r($teste);
        echo "<br/><br/>";
        asort($teste);
        print_r($teste);
    ?>
    <h2>Função arsort</h2>
    <p>Ordena um array em ordem descrescente mantendo a associação entre índices e valores</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        print_r($teste);
        echo "<br/><br/>";
        arsort($teste);
        print_r($teste);
    ?>
    <h2>Função count</h2>
    <p>Conta o número de elementos de uma variável, ou propriedades de um objeto</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        echo "Quantidade de elementos do array: ".count($teste);
    ?>
    <h2>Função in_array</h2>
    <p>Checa se um valor existe em um array</p>
    <?php
        $teste = array(
            "nome" => "Lucas",
            "idade" => 22,
            "cidade" => "Suzano",
            "país" => "Brasil"
        );

        if (in_array("Lucas", $teste)) {
           echo "O nome Lucas está no array";
        }
    ?>
</body>
</html>