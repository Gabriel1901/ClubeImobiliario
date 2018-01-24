<?php

require_once '../vendor/autoload.php';

$viewFoolder = 'views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader 
       /* , [
    'cache' => __DIR__ . 'cache'
        ]*/
        );

print $twig->render('login/index.twig', array(
            'img' => img,
            'route' => route
));
