<?php
//16. O Gerente de Notas: Um professor quer inserir as notas de um aluno e receber não apenas a média, mas também a maior nota obtida entre todas as provas realizadas.

$quantidade = readline("Quantas notas? ");

$soma = 0;
$notas = [];

for ($i = 1; $i <= $quantidade; $i++) {
    $nota = readline("Digite a nota $i: ");
    $notas[] = $nota;
    $soma += $nota;
}

$media = $soma / $quantidade;
$maior = max($notas);

echo "Média: $media\n";
echo "Maior nota: $maior\n";
?>