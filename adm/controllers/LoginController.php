<?php

require_once '../config.php';

class LoginController {

    public function index() {


        $this->site();
    }

    public function site() {
        
        $img = img;
        include "views/usuario/index.twig";
    }

}
