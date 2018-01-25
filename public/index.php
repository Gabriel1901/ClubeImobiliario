<?php

require_once '../vendor/autoload.php';

$viewFoolder = 'views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader
        /* , [
          'cache' => __DIR__ . 'cache'
          ] */
);

print $twig->render($page, array(
            'user' => isset($_SESSION['user']) ? $_SESSION['user'] : "",
            'img' => img,
            'route' => route,
            'end' => end
));
