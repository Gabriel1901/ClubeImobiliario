<?php


function __autoload($classe)
{
    if (file_exists("imobiliaria/controllers/" . $classe . ".php")) {
        require_once "imobiliaria/controllers/" . $classe . ".php";
    } else {
        require_once "imobiliaria/models/" . $classe . ".php";
    }
}


    
$controller = isset($_GET['route']) ? ucfirst($_GET['route']) . "Controller" : 'SiteController';
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
 