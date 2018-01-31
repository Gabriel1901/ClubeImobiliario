<?php

require_once '../vendor/autoload.php';

$viewFoolder = 'views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader
        /* , [
          'cache' => __DIR__ . 'cache'
          ] */
);

print $twig->render($this->page . '.twig', array(
            'user' => isset($_SESSION['user']) ? $_SESSION['user'] : "",
            'cat' => isset($_SESSION['cat']) ? $_SESSION['cat'] : "",
            'namePage' => isset($this->url->getLayout()['name_page']) ? $this->url->getLayout()['name_page'] : "",
            'page' => isset($this->url->getLayout()['layout_id']) ? $this->url->getLayout()['layout_id'] : "",
            'route_id' => isset($this->url->getLayout()['route_id']) ? $this->url->getLayout()['route_id'] : "",
            'img' => img,
            'route' => route,
            'end' => end,
            
));
