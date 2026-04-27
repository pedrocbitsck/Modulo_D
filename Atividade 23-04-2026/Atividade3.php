<?php
// Controle de Estoque: Crie um sistema que recebe a quantidade atual de um produto e a quantidade mínima. Se o estoque atual for menor que o mínimo, o
// sistema deve alertar "Comprar Reposição"; caso contrário, "Estoque OK".

$estoque = readline("Quantidade atual: ");
$minimo = readline("Quantidade mínima: ");

if ($estoque < $minimo) {
    echo "Comprar Reposição\n";
} else {
    echo "Estoque OK\n";
}
?>