<?php

require_once 'config.php';

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {

    header("location: index.php");

    exit;
}

//require_once 'autoload.php';

class PainelController {

    public function index() {


        $this->site();
    }

    public function site() {
        
        
         $img = img;
        include "views/adm/index.php";
    }

}
