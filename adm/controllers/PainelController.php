<?php

namespace adm\controllers;

use adm;
use adm\models\url\RouteModel;
use adm\models\clientes\ClientesModel;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


    header("location: ../index.php");

    exit;
}

require_once 'autoload.php';
require_once 'config.php';

class PainelController {

    static $indexPage = indexPage;
    private $clientes;
    private $url;

    public function __construct() {

        $this->clientes = new ClientesModel();
        $this->url = new RouteModel();
        $this->url->getUrl($_GET['route']);
        $this->page = $this->url->getLayoutPage();
    }

    public function index() {


        $this->painel();
    }

//PAGINAS DE NAVEGA��O

    public function painel() {


        include self::$indexPage;
    }

    public function pedidos() {



        include self::$indexPage;
    }

    public function departamentos() {


        include self::$indexPage;
    }

    public function produtos() {



        include self::$indexPage;
    }

    public function clientes() {


        include self::$indexPage;
    }

    public function marketing() {


        include self::$indexPage;
    }

    public function configuracoes() {


        include self::$indexPage;
    }

    //PAGINAS EDITAR

    public function editarDepartamentos() {


        include self::$indexPage;
    }

    public function editarProdutos() {


        include self::$indexPage;
    }

    public function editarMarketings() {


        include self::$indexPage;
    }

    public function editarClientes() {


        include self::$indexPage;
    }

    public function editarPedidos() {


        include self::$indexPage;
    }

    public function novoCliente() {

        include self::$indexPage;
    }

}
