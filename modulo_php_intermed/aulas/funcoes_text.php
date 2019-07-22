<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulações de textos - Módulo PHP Intermediário</title>
</head>
<body>
    <h2>Função explode</h2>
    <p>Divide uma string em strings</p>
    <p>Exemplo com o nome <strong>Lucas Martins da Silva</strong></p>
    <?php
        $nome = "Lucas Martins da Silva";
        $luc = explode(" ", $nome);
        print_r($luc);
    ?>
    <h2>Função implode</h2>
    <p>Junta elementos de uma matriz em uma string</p>
    <p>Exemplo com o nome <strong>Lucas Martins da Silva</strong></p>
    <?php
        $lucas = array("Lucas", "Martins", "da", "Silva");
        print_r($lucas);
        $nome_completo = implode(" ", $lucas);
        echo "<br/>".$nome_completo;
    ?>
    <h2>Função number_format</h2>
    <p>Formata um número com os milhares agrupados</p>
    <p>Exemplo com o número <strong>5.658413</strong></p>
    <?php
        $n = number_format(5.658413, 2);
        echo "Número arredondado: ".$n."<br/>";
    ?>
    <p>Outro exemplo com o número <strong>25.550,629</strong></p>
    <?php
        $n = number_format(25550.629, 2, ",", ".");
        echo "Número arredondado: ".$n;
    ?>
    <h2>Função str_replace</h2>
    <p>Substitui todas as ocorrências da string de procura com a string de substituição</p>
    <p>Exemplo com o nome <strong>Lucas Martins da Silva</strong>, trocando o Silva pelo Motta</p>
    <?php
        $nome = "Lucas Martins da Silva";
        $troca = str_replace("Silva", "Motta", $nome);
        echo $troca;
    ?>
    <h2>Função strtolower</h2>
    <p>Converte uma string para minúsculas</p>
    <p>Exemplo com o nome <strong>SUZANO</strong></p>
    <?php
        echo strtolower("SUZANO");
    ?>
    <h2>Função strtoupper</h2>
    <p>Converte uma string para maiúsculas</p>
    <p>Exemplo com o nome <strong>suzano</strong></p>
    <?php
        echo strtoupper("suzano");
    ?>
    <h2>Função substr</h2>
    <p>Retorna uma parte de uma string</p>
    <p>Exemplo com o nome <strong>Suzano</strong></p>
    <?php
        $cidade = "Suzano";
        $abrev = substr($cidade, 0, 3);
        echo $abrev;
    ?>
    <h2>Função ucfirst</h2>
    <p>Converte para maiúscula o primeiro caractere de uma string</p>
    <p>Exemplo com o nome <strong>lucas</strong></p>
    <?php
        $nome = "lucas";
        echo ucfirst($nome);
    ?>
    <h2>Função ucwords</h2>
    <p>Converte para maiúsculas o primeiro caractere de cada palavra</p>
    <p>Exemplo com o nome <strong>lucas martins da silva</strong></p>
    <?php
        $nome = "lucas martins da silva";
        echo ucwords($nome);
    ?>
</body>
</html>