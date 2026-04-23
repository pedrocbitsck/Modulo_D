<?php
//5. Peça ao usuário uma nota (0 a 10). Se for maior ou igual a 7, exiba "Aprovado", senão "Reprovado".

$nota = readline("Digite a nota (0 a 10): ");

if ($nota >= 7) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
?>