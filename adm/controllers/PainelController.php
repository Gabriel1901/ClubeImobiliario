<?php

namespace adm\controllers;

use adm;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {

    header("location: index.php");

    exit;
}

require_once 'autoload.php';
require_once 'config.php';

class PainelController {

    private $indexPage = "../public/index.php";

    public function index() {

        $this->adm();
    }

    public function adm() {

        $img = img;
  
        
        
        $page = 'adm/index.twig';
        include $this->indexPage;
    }

    public function pedidos() {


        $page = 'adm/pedidos.twig';
        include $this->indexPage;
    }

    public function departamentos() {



        $page = 'adm/departamentos.twig';
        include $this->indexPage;
    }

    public function produtos() {


        $page = 'adm/produtos.twig';
        include $this->indexPage;
    }

    public function clientes() {

        $page = 'adm/clientes.twig';
        include $this->indexPage;
    }

    public function marketings() {

        $page = 'adm/marketings.twig';
        include $this->indexPage;
    }

    public function configuracoes() {

        $page = 'adm/configuracoes.twig';
        include $this->indexPage;
    }

}
