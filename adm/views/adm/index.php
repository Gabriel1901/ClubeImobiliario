<?php
session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {

    header("location: index.php");

    exit;
}
require_once '../vendor/autoload.php';

$viewFoolder = 'views';

$loader = new Twig_Loader_Filesystem($viewFoolder);
$twig = new Twig_Environment($loader 
       /* , [
    'cache' => __DIR__ . 'cache'
        ]*/
        );

print $twig->render('adm/index.twig', array(
            'img' => $img
));
