<?php
$nomes = [];

for ($i = 0; $i < 5; $i++) {
    $nomes[] = readline("Digite um nome: ");
}

foreach ($nomes as $nome) {
    echo $nome . "\n";
}
?>