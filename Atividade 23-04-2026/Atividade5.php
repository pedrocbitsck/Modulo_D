<?php
// 5. Calculadora de Frete: O frete custa R$ 50,00. Porém, se a compra for acima de R$ 250,00, o frete é grátis. Se for acima de R$ 500,00, além do frete grátis, o cliente
// ganha 10% de desconto no valor total.5. Calculadora de Frete

$valor = readline("Digite o valor da compra: ");

if ($valor > 500) {
    $desconto = $valor * 0.10;
    $total = $valor - $desconto;
    echo "Frete grátis + 10% desconto\n";
    echo "Total: R$ $total\n";
} elseif ($valor > 250) {
    echo "Frete grátis\n";
    echo "Total: R$ $valor\n";
} else {
    $total = $valor + 50;
    echo "Frete: R$ 50\n";
    echo "Total: R$ $total\n";
}
?>