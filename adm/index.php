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

if(isset($_GET['route']) && $_GET['route'] == 'painel'){
    $prefixo = 'adm\controllers\P';
}else{
    $prefixo = 'adm\controllers\L';
}

$controller = isset($_GET['route']) ? $prefixo.substr(ucfirst($_GET['route']),1) . "Controller" : 'adm\controllers\LoginController';
$action = isset($_GET['a']) ? ucfirst($_GET['a']) : "index";

    
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
