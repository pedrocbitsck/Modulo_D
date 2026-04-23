<?php
//19. Faça um programa que verifique se um nome está presente em um vetor de nomes
$nomes = ["Pedro", "Léo", "Giovana"];

for ($i = 0; $i < 5; $i++) {
    $nomes[] = readline("Digite um nome: ");
}

$busca = readline("Digite o nome para buscar: ");

if (in_array($busca, $nomes)) {
    echo "Nome encontrado";
} else {
    echo "Nome não encontrado";
}
?>