<?php

require_once '../vendor/autoload.php';



$viewFoolder = 'views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader
        /* , [
          'cache' => __DIR__ . 'cache'
          ] */
);

print $twig->render($page . '.twig', array(
            'user' => isset($_SESSION['user']) ? $_SESSION['user'] : "",
            'cat' => isset($_SESSION['cat']) ? $_SESSION['cat'] : "",
            'namePage' => isset($this->get['name']) ? $this->get['name'] : "",
            'page' => isset($this->get['name']) ?  strtolower($this->get['name']) : "",
            'img' => img,
            'route' => route,
            'end' => end,
            
));
