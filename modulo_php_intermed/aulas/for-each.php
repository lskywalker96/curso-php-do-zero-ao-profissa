<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Each - Módulo PHP Intermediário</title>
</head>
<body>
    <h2>Exemplo 1</h2>
    <p><code>$nome = array("Lucas", "Lie", "Machado", "Drogba");</code></p>
    <?php
        $nome = array("Lucas", "Lie", "Machado", "Drogba");

        foreach ($nome as $aluno) {
            echo "Aluno: ".$aluno."<br/>";
        }
    ?>
    <h2>Exemplo 2</h2>
    <p>
        <code>
            $nomes = array (
                array("nome"=>"Lucas", "idade"=>22),
                array("nome"=>"Lie", "idade"=>20),
                array("nome"=>"Machado", "idade"=>25),
                array("nome"=>"Drogba", "idade"=>23)
            );
        </code>
    </p>
    <?php
        $nomes = array (
            array("nome"=>"Lucas", "idade"=>22),
            array("nome"=>"Lie", "idade"=>20),
            array("nome"=>"Machado", "idade"=>25),
            array("nome"=>"Drogba", "idade"=>23)
        );
        
        foreach ($nomes as $aluno) {
            echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."<br/>";
        }
    ?>
    <h2>Exemplo 3</h2>
    <p>
        <code>
            $lucas = array (
                "nome"=>"Lucas",
                "idade"=>22,
                "cidade"=>"Suzano/SP",
                "país"=>"Brasil"
            );
        </code>
    </p>
    <?php
        $lucas = array (
            "nome"=>"Lucas",
            "idade"=>22,
            "cidade"=>"Suzano/SP",
            "país"=>"Brasil"
        );
        
        foreach ($lucas as $indice => $lu) {
            echo $indice." = ".$lu."<br/>";
        }
    ?>
</body>    
</html>