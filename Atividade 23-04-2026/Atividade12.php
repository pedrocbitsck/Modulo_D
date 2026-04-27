<?php
// 12. Validando de Acesso: O sistema só permite a entrada se o usuário digitar a senha coreta. Ele tem apenas 3 tentativas. Se errar as 3, o sistema deve informar "Conta
// Bloqueada".

$senhaCorreta = "1234";
$tentativas = 0;

while ($tentativas < 3) {
    $senha = readline("Digite a senha: ");

    if ($senha == $senhaCorreta) {
        echo "Acesso permitido\n";
        break;
    } else {
        echo "Senha incorreta\n";
    }

    $tentativas++;
}

if ($tentativas == 3) {
    echo "Conta bloqueada\n";
}
?>