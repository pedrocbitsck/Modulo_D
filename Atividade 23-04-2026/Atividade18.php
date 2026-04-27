<?php
//18. Calculadora de Idade Canina: Receba a idade de um cachorro e retorne a idade equivalente em anos humanos (para os dois primeiros anos, cada ano vale 10.5;
// depois disso, cada ano vale 4).

$idade = readline("Idade do cachorro: ");

if ($idade <= 2) {
    $humano = $idade * 10.5;
} else {
    $humano = (2 * 10.5) + (($idade - 2) * 4);
}

echo "Idade humana: $humano\n";
?>