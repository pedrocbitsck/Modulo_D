<?php
//23. Faça um programa que percorra um vetor de notas e calcule a média da turma
$notas = [7, 8, 6, 9, 5];
$soma = 0;

foreach ($notas as $n) {
    $soma += $n;
}

$media = $soma / count($notas);
echo $media;
?>