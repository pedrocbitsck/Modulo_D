<?php
//22. Crie um programa que percorra um vetor de 10 números e conte quantos são maiores que 50.

$nums = [];

for ($i = 0; $i <= 10; $i++) {
    $nums[] = readline("Digite um número: ");
}

$cont = 0;

foreach ($nums as $n) {
    if ($n > 50) {
        $cont++;
    }
}

echo "Quantidade maior que 50: $cont";
?>