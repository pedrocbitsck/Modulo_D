<?php
//Conversor de Medidas: Crie uma ferramenta que receba um valor em metros eapresente uma lista de conversões para centímetros, milímetros e quilômetros de uma só vez.

$metros = readline("Digite o valor em metros: ");

$cm = $metros * 100;
$mm = $metros * 1000;
$km = $metros / 1000;

echo "Centímetros: $cm\n";
echo "Milímetros: $mm\n";
echo "Quilômetros: $km\n";
?>