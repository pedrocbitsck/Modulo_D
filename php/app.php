<?php global $view; ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog do Grêmio</title>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

<header>
    ⚽ Blog do Grêmio
</header>

<nav>

    <a href="/">Início</a>

    <a href="/proximos">
        Próximos Jogos
    </a>

    <a href="/jogos">
        Jogos Encerrados
    </a>

    <a href="/sobre">
        Sobre
    </a>

    <a href="/login">
        Login
    </a>

    <a href="/registrar">
        Registrar
    </a>

</nav>

<div class="container">

    <?php require "view/{$view}.view.php"; ?>

</div>

</body>

</html>