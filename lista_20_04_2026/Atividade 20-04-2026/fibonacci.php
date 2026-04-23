<?php
//33. Crie um programa que gere a sequência de Fibonacci (até o 10º termo) e armazene em um vetor.
$fib = [0, 1];

for ($i = 2; $i < 10; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

foreach ($fib as $n) {
    echo $n . "<br>";
}
?>