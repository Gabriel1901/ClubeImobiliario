<?php

require_once '../autoload.php';
require_once '../config.php';

function __autoload($classe) {
    if (file_exists("../" . urlSite . "/" . $classe . ".php")) {
        require_once "../" . urlSite . "/Controllers/" . $classe . ".php";
    } else {
        echo 'teste1';
        require_once "models/" . $classe . ".php";
    }
}

$rota = isset($_GET['url']) ? explode("/", $_GET['url']) : "";
$controllers = isset($rota[0]) && $rota[0] == 'adm' ? 'Painel' : '';

if (isset($rota[0]) && $rota[0] == 'login') {
    $controllers = ucfirst($rota[0]);
    $rota[0] = 'Adm';
}

if (isset($rota[0]) && $rota[0] == 'clientes') {
    $controllers = ucfirst($rota[0]);
    $rota[0] = 'Adm';
}

$controller = isset($rota[0]) ? ucfirst($rota[0]) . "\Controllers\\" . $controllers . "Controller" : 'Imobiliaria\Controllers\SiteController';
$action = isset($rota[1]) && $rota[1] !== "" ? ucfirst($rota[1]) : "index";



if (class_exists($controller)) {
    $route = new $controller();
    if (method_exists($route, $action)) {
        $route->$action();
    } else {
        print "Pagina nao encontrada";
    }
} else {

    print "Pagina naaaao encontrada";
}      