<?php
//11. Simulador de Juros: Um investimento rende 1% ao mês. Receba um valor inicial e mostre quanto o usuário terá mês a mês durante um período de um ano.

$valor = readline("Digite o valor inicial: ");

for ($mes = 1; $mes <= 12; $mes++) {
    $valor *= 1.01;
    echo "Mês $mes: R$ $valor\n";
}
?>

?>