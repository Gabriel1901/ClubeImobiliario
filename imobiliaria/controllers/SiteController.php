<?php

require_once 'config.php';

class SiteController {

    public function index() {


        $this->site();
    }

    public function email() {

        include "imobiliaria/views/email/emailProposta.php";
    }

    public function site() {
        
        $img = img;
        include "public/site.php";
    }

}
