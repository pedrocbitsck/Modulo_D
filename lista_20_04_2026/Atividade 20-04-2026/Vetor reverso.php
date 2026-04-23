<?php
//24. Crie um programa que peça 5 números ao usuário e armazene em um vetor. Depois, exiba-os em ordem inversa.

$nums = [];

for ($i = 0; $i < 5; $i++) {
    $nums[$i] = readline("Digite um número: ");
}

$nums = array_reverse($nums);

foreach ($nums as $n) {
    echo $n . "<br>";
}
?>