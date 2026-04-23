<?php
//25. Crie um programa que percorra um vetor de nomes e exiba apenas os que começam com a letra "A".
$nomes = [];

for ($i = 0; $i < 5; $i++) {
    $nomes[] = readline("Digite um nome: ");
}

foreach ($nomes as $nome) {
    if (str_starts_with($nome, "A")) {
        echo $nome . "\n";
    }
}
?>