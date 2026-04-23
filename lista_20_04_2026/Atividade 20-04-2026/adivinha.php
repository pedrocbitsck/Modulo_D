<?php
$numero = rand(1, 10);
$tentativa = 0;

while ($tentativa != $numero) {
    $tentativa = readline("Tente adivinhar: ");
}

echo "Acertou!";
?>