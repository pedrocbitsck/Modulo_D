<?php
// 9. Relatório de Vendas: Receba uma lista de valores vendidos por um vendedor no mês. O sistema deve identificar qual foi a maior venda e qual foi a menor.

$quantidade = readline("Quantas vendas deseja registrar? ");

$vendas = [];

for ($i = 1; $i <= $quantidade; $i++) {
    $vendas[$i] = readline("Digite o valor da venda $i: ");
}

$maior = max($vendas);
$menor = min($vendas);

echo "Maior venda: $maior\n";
echo "Menor venda: $menor\n";
?>