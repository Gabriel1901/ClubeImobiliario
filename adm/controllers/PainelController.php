<?php

namespace adm\controllers;

use adm;
use adm\models\clientes\ClientesModel;
use adm\models\url\RouteModel;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {

    header("location: index.php");

    exit;
}

require_once 'autoload.php';
require_once 'config.php';

class PainelController extends adm\app\page\Route {

    private $indexPage = "../public/index.php";
    private $clientes;
    private $url;

    public function __construct() {

        $this->clientes = new ClientesModel();
        $this->url = new RouteModel();
    }

    public function index() {

        $this->painel();
    }

//PAGINAS DE NAVEGA��O

    public function painel() {

        $url = $this->url->GetRoute($_GET['route']);
        
        
        $page = $url['route'] . '/index';


        include $this->indexPage;
    }

    public function pedidos() {
        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function departamentos() {


        $url = $this->url->GetRoute($_GET['route']);
        
        $page = $url['route'];
        include $this->indexPage;
    }

    public function produtos() {


        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function clientes() {

      
        
        
        $teste = $this->clientes->selectAllClientes();


        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function marketing() {


        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function configuracoes() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    //PAGINAS EDITAR

    public function editarDepartamentos() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function editarProdutos() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function editarMarketings() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function editarClientes() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

    public function editarPedidos() {

        $url = $this->url->GetRoute($_GET['route']);
        $page = $url['route'];
        include $this->indexPage;
    }

}
