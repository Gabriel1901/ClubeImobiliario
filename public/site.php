<?php

require_once 'vendor/autoload.php';

$viewFoolder = 'imobiliaria/views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader 
       /* , [
    'cache' => __DIR__ . 'cache'
        ]*/
        );

print $twig->render('site/index.twig', array(
            'img' => $img
));
