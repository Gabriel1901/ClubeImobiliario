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
            'namePage' => isset($this->get['name_page']) ? $this->get['name_page'] : "",
            'page' => isset($this->get['layout_id']) ? $this->get['layout_id'] : "",
            'img' => img,
            'route' => route,
            'end' => end,
            
));
