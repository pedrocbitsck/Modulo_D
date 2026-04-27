<?php
//O Painel do Aeroporto: Você precisa exibir uma mensagem de saudação baseada na hora atual (formato 24h). Se for entre 05:00 e 11:59, "Bom dia"; entre 12:00 e
//17:59, "Boa tarde"; e após as 18:00, "Boa noite".

$hora = readline("Digite a hora (0-23): ");

if ($hora >= 5 && $hora <= 11) {
    echo "Bom dia\n";
} elseif ($hora >= 12 && $hora <= 17) {
    echo "Boa tarde\n";
} else {
    echo "Boa noite\n";
}
?>