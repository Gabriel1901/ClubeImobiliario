<?php

namespace adm\controllers;

use adm;
use adm\models\clientes\ClientesModel;
use adm\models\url\RouteModel;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


    header("location: ../index.php");

    exit;
}

require_once 'autoload.php';
require_once 'config.php';

class PainelController extends adm\app\page\Route {

    static $indexPage = indexPage;
    private $clientes;
    private $url;
    public $get;

    public function __construct() {

        $this->clientes = new ClientesModel();
        $this->url = new RouteModel();
        $this->get = $this->url->GetRoute($_GET['route']);
    }

    public function index() {

        $this->painel();
    }

//PAGINAS DE NAVEGA��O

    public function painel() {


        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function pedidos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function departamentos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function produtos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function clientes() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function marketing() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function configuracoes() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    //PAGINAS EDITAR

    public function editarDepartamentos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function editarProdutos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function editarMarketings() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function editarClientes() {

        
        
        $page = $this->get['route'];
        include self::$indexPage;
    }

    public function editarPedidos() {

        $page = $this->get['route'];
        include self::$indexPage;
    }

}
