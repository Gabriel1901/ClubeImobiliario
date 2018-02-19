<?php

require_once '../autoload.php';
require_once '../config.php';


$rota = isset($_GET['url']) ? explode("/", $_GET['url']) : "";
$controllers = isset($rota[0]) && $rota[0] == 'adm' ? 'Painel' : '';

if (isset($rota[1])) {
    $controllers = ucfirst($rota[1]);
    $rota[0] = 'Adm';
}

$controller = isset($rota[0]) ? ucfirst($rota[0]) . "\Controllers\\" . ucfirst($controllers) . "Controller" : 'Imobiliaria\Controllers\SiteController';
$action = isset($rota[2]) && $rota[2] !== "" ? ucfirst($rota[2]) : "index";



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