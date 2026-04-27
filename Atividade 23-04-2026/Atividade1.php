<?php
//O Analista de Crédito: Uma loja deseja automatizar a aprovação de empréstimos. O sistema deve receber o valor do salário e o valor da parcela. A regra é: a parcela
//não pode ultrapassar 30% do salário. Retorne se o crédito foi aprovado ou negado.

$salario = readline("Digite o salário: ");
$parcela = readline("Digite o valor da parcela: ");

if ($parcela <= ($salario * 0.3)) {
    echo "Crédito aprovado\n";
} else {
    echo "Crédito negado\n";
}
