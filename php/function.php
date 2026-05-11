<?php

function view(string $viewName, array $data = []): void
{
    global $view;

    $view = $viewName;

    foreach ($data as $key => $value) {
        $GLOBALS[$key] = $value;
    }

    require "view/template/app.php";
}

function dd(mixed ...$dump): void
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";

    die();
}

function abort(int $code): void
{
    http_response_code($code);

    require "view/{$code}.view.php";

    die();
}