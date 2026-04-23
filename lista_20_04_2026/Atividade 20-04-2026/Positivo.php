<?php
//1. Crie um programa que receba um número e mostre se ele é positivo.

$num = readline("Digite um número: ");

if ($num > 0) {
    echo "Número positivo";
} else if ($num < 0) {
    echo "Número negativo";
} else {
    echo "Zero";
}
?>