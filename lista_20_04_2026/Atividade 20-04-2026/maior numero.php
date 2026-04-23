<?php
//21. Dado o vetor [10, 5, 8, 20, 15], encontre o maior número.
$nums = [];

for ($i = 0; $i < 5; $i++) {
    $nums[] = readline("Digite um número: ");
}

echo "Maior: " . max($nums);
?>