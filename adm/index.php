<?php

namespace adm;

use adm\controllers;

require_once 'autoload.php';


function __autoload($classe)
{
    if (file_exists("controllers/" . $classe . ".php")) {
        require_once "controllers/" . $classe . ".php";
    } else {
        require_once "models/" . $classe . ".php";
    }
}

$rota = isset( $_GET['route'])? explode("/", $_GET['route']) : "";

$controller = isset($rota[0]) ? "adm\controllers\\".ucfirst($rota[0]) . "Controller" : 'adm\controllers\LoginController';
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
