<?php
$nomes = array("Lucas", "Martins");
$pessoa = array(
    "nome" => "Lucas",
    "sobrenome" => "Martins",
    "idade" => 22,
    "sexo" => "masculino"
);
$escola = array();
$escola[] = array (
    "nome" => "Lucas",
    "serie" => "8°",
    "classe" => "A"
);
$escola[] = array (
    "nome" => "Fulano",
    "serie" => "8°",
    "classe" => "B"
);
$escola[] = array (
    "nome" => "Sicrano",
    "serie" => "8°",
    "classe" => "C"
);
$escola[] = array (
    "nome" => "Beltrano",
    "serie" => "8°",
    "classe" => "A"
);
$escola[] = array (
    "nome" => "Mulano",
    "serie" => "8°",
    "classe" => "C"
);

echo $pessoa["nome"]."<br>";
echo $nomes[1]."<br>";
print_r ($pessoa)."<br>";
echo "<br>";
print_r ($escola[1]);
?>