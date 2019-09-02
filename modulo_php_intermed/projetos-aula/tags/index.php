<?php
    //Iniciando conexão BD no servidor
    $dsn = "mysql:dbname=projeto_tags;host=127.0.0.1";
    $dbuser = "root";
    $dbpswrd = "";

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpswrd);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo "Falhou: ".$e->getMessage();
    }

    $sql = "SELECT caracteristicas FROM usuarios";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()>0) {
        $lista = $sql->fetchAll();

        $carac = array();

        foreach ($lista as $usuario) {
            $palavras = explode(",", $usuario['caracteristicas']);
            foreach ($palavras as $palavra) {
                $palavra = trim($palavra);

                if (isset($carac[$palavra])) {
                    $carac[$palavra]++;
                } else {
                    $carac[$palavra] = 1;
                }
            }
        }
    }

    //arsort($carac) ->organizar e exibir do maior para o menor (decrescente)

    $palavras = array_keys($carac);
    $contagens = array_values($carac);

    $maior = max($contagens);

    $tamanhos = array(11, 15, 20, 30);

    for ($x=0; $x<count($palavras); $x++) { 
        $n = $contagens[$x] / $maior;
        $h = ceil($n*count($tamanhos));
        
        echo "<p style='font-size:".$tamanhos[$h-1]."px'>".utf8_encode($palavras[$x])."</p>";
    }
