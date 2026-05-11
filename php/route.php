<?php

$controller = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$controller = str_replace('/', '', $controller);

if(!$controller){
    $controller = 'index';
}

if(!file_exists("controllers/{$controller}.controller.php")){
    abort(404);
}

require "controllers/{$controller}.controller.php";