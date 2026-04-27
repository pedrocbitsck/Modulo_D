<?php
//15. Verificador de Sequência: Dado um número inteiro positivo, verifique se ele é um "número perfeito" (um número cuja soma de seus divisores próprios é igual a ele
// mesmo, como o 6: 1+2+3 = 6).

$num = readline("Digite um número: ");

$soma = 0;

for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
        $soma += $i;
    }
}

if ($soma == $num) {
    echo "Número perfeito\n";
} else {
    echo "Não é perfeito\n";
}
?>