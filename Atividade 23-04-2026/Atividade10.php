<?php
// 10. Gerador de Login: Receba o nome completo de uma pessoa e gere um "username" composto pela primeira letra do nome e o último sobrenome em letras minúsculas.

$nome = readline("Digite seu nome completo: ");

$partes = explode(" ", $nome);

$primeira = strtolower($partes[0][0]);
$ultimo = strtolower($partes[count($partes)-1]);

$username = $primeira . $ultimo;

echo "Username: $username\n";
?>