<?php

namespace Adm\Controllers;

use Systema\Controller;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


    header("location: /login");

    exit;
}

require_once '../autoload.php';
require_once '../config.php';

class PainelController extends Controller {

    public function index() {

        print $this->twig->render('painel/index.twig', array(
            'titulo' => 'Painel de Controle'
        ));
    }

    public function pedidos() {
        
    }

    public function departamentos() {
        
    }

    public function produtos() {
        
    }

    public function clientes() {

        print $this->twig->render('painel/list.twig', array(
            'titulo' => 'Clientes'
        ));
    }

    public function marketing() {
        
    }

    public function configuracoes() {
        
    }

    //PAGINAS EDITAR

    public function editarDepartamentos() {
        
    }

    public function editarProdutos() {
        
    }

    public function editarMarketings() {
        
    }

    public function editarClientes() {
        
        
        print $this->twig->render('painel/editCliente.twig', array(
            'titulo' => 'Editar Clientes'
        ));
    }

    public function editarPedidos() {
        
    }

    public function novoCliente() {
        print $this->twig->render('painel/editCliente.twig', array(
            'titulo' => 'Novo Clientes'
        ));
        
    }

}
