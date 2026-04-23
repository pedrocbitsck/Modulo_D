<?php
//30. Crie um programa que peça notas ao usuário até que ele digite -1. Armazene em um vetor e calcule a média.

$notas = [];
$nota = 0;

while ($nota != -1) {
    $nota = readline("Digite uma nota (-1 para sair): ");
    
    if ($nota != -1) {
        $notas[] = $nota;
    }
}

$media = array_sum($notas) / count($notas);
echo "Média: $media";
?>