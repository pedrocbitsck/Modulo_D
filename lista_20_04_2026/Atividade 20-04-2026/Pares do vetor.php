<?php
//20. Crie um vetor com 10 números e exiba apenas os números pares.

$nums = [];

for ($i = 0; $i < 10; $i++) {
    $nums[] = readline("Digite um número: ");
}

foreach ($nums as $n) {
    if ($n % 2 == 0) {
        echo $n . "\n";
    }
}
?>