<?php
// 6. O Contador de Passos: Um usuário quer saber quantos metros caminhou em uma semana. Receba uma lista com os passos de cada um dos 7 dias, calcule o total e
// converta para quilômetros (considere 1 passo = 0,8 metros).

$passos = [];
$total = 0;

for ($i = 1; $i <= 7; $i++) {
    $passos[$i] = readline("Passos do dia $i: ");
    $total += $passos[$i];
}

$metros = $total * 0.8;
$km = $metros / 1000;

echo "Total em km: $km\n";
?>