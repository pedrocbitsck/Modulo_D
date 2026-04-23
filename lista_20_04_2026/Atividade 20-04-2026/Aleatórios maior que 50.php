<?php
//29. Faça um programa que gere um vetor com 10 números aleatórios entre 1 e 100 e mostre apenas os números maiores que 50.

$nums = [];

for ($i = 0; $i < 10; $i++) {
    $nums[] = rand(1, 100);
}

foreach ($nums as $n) {
    if ($n > 50) {
        echo $n . "<br>";
    }
}
?>