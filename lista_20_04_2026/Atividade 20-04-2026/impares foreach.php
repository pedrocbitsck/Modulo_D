<?php
//26. Crie um programa que percorra um vetor e exiba apenas os números ímpares usando if dentro de um foreach.
$nums = [10, 5, 8, 20, 15];

$maior = $nums[0];

foreach ($nums as $n) {
    if ($n > $maior) {
        $maior = $n;
    }
}

echo "Maior número: " . $maior;
?>