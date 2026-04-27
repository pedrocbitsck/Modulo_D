<?php
// 13. Organizador de Fila: Receba uma lista de pessoas com suas idades. O sistema deve separar essa lista em duas: "Prioritário" (60 anos ou mais) e "Geral".

$pessoas = [];
$prioritario = [];
$geral = [];

$quantidade = readline("Quantas pessoas? ");

for ($i = 1; $i <= $quantidade; $i++) {
    $idade = readline("Idade da pessoa $i: ");
    $pessoas[$i] = $idade;

    if ($idade >= 60) {
        $prioritario[] = $idade;
    } else {
        $geral[] = $idade;
    }
}

echo "Prioritário:\n";
print_r($prioritario);

echo "Geral:\n";
print_r($geral);
?>