<?php
//32. Faça um programa que percorra um vetor de nomes e crie outro vetor apenas com os nomes que tenham mais de 5 letras.0
$nomes = [];

for ($i = 0; $i < 5; $i++) {
    $nomes[] = readline("Digite um nome: ");
}

foreach ($nomes as $nome) {
    if (strlen($nome) > 5) {
        echo $nome . "\n";
    }
}
?>