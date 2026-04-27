<?php
//20. Resumo de Carrinho: Dado um array onde cada item é um sub-array contendo [nome_item, preco, quantidade], calcule o valor total que o cliente deve pagar ao final da compra.

$quantidade = readline("Quantos produtos? ");
$total = 0;

for ($i = 1; $i <= $quantidade; $i++) {
    $nome = readline("Nome do produto: ");
    $preco = readline("Preço: ");
    $qtd = readline("Quantidade: ");

    $total += $preco * $qtd;
}

echo "Total da compra: R$ $total\n";
?>