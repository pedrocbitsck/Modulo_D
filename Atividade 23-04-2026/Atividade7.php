<?php
// 7. Filtro de Conteúdo: Dada uma lista de palavras (comentários de um site), verifique se a palavra "spam" ou "clickbait" aparece na lista e bloqueie o comentário se encontrar

$comentarios = [];

for ($i = 1; $i <= 3; $i++) {
    $comentarios[$i] = readline("Digite a palavra $i: ");
}

$bloqueado = false;

foreach ($comentarios as $palavra) {
    if ($palavra == "spam" || $palavra == "clickbait") {
        $bloqueado = true;
    }
}

if ($bloqueado) {
    echo "Comentário bloqueado\n";
} else {
    echo "Comentário permitido\n";
}
?>