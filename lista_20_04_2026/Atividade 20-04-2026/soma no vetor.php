<?php
//18. Dado o vetor [2, 4, 6, 8, 10], calcule a soma de todos os elementos.

$nums = [2, 4, 6, 8, 10];
$soma = 0;

foreach ($nums as $n) {
    $soma += $n;
}

echo $soma;
?>