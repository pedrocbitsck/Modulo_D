<?php
// 4. Tabela de Jogos: Receba o nome de um time e exiba em qual grupo ele está em um campeonato fictício (Ex: Grêmio e Inter no Grupo A, Flamengo e Vasco no Grupo
//B). Se o time não for conhecido, exiba "Time não identificado".

$time = readline("Digite o time: ");

if ($time == "Grêmio" || $time == "Inter") {
    echo "Grupo A\n";
} elseif ($time == "Flamengo" || $time == "Vasco") {
    echo "Grupo B\n";
} else {
    echo "Time não identificado\n";
}
?>