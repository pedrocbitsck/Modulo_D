<?php
//31. Crie um programa que receba 5 números, some todos e mostre o maior e o menor valor.
$nums = [];

for ($i = 0; $i < 5; $i++) {
    $nums[] = readline("Digite um número: ");
}

echo "Soma: " . array_sum($nums) . "<br>";
echo "Maior: " . max($nums) . "<br>";
echo "Menor: " . min($nums);
?>