<?php
//17. Sorteador de Prêmios: Crie um sistema que escolhe aleatoriamente um nome de uma lista de participantes e exibe: "O vencedor da rodada é: [Nome]".

$quantidade = readline("Quantos participantes? ");
$nomes = [];

for ($i = 1; $i <= $quantidade; $i++) {
    $nomes[] = readline("Nome $i: ");
}

$indice = array_rand($nomes);

echo "O vencedor é: " . $nomes[$indice] . "\n";
?>