<?php

//namespace ClubeImobiliario\imobiliaria;

require_once 'config.php';

class SiteController {

    public $img;

    public function __construct() {
        $this->img = new Config();
    }

    public function index() {


        $this->site();
    }

    public function email() {

        include "views/email/emailProposta.php";
    }

    public function site() {
        $img = $this->img->imgs();
        include "public/site.php";
    }

}
