<?php
//4. Faça um programa que receba duas variáveis $a e $b. Mostre qual delas é a maior.

$a = readline("Digite o primeiro número: ");
$b = readline("Digite o segundo número: ");

if ($a > $b) {
    echo "Maior: $a";
} else if ($b > $a) {
    echo "Maior: $b";
} else {
    echo "São iguais";
}
?>