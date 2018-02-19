<?php

namespace Adm\controllers;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


    header("location: login");

    exit;
}

use Adm;
use Systema\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../autoload.php';

/**
 * Description of clientesControllers
 *
 * @author Projeto
 */
class ClientesController extends Controller {

    public function index() {

        print $this->twig->render('clientes/index.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Clientes',
                    'page' => 'list_cliente',
                    'route' => route,
                    'classe' => 'adm/clientes/',
                    'route' => route
        ));
    }

    public function editarClientes() {


        print $this->twig->render('clientes/editar.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Editar Clientes',
                    'page' => 'edit_cliente',
                    'route' => route
        ));
    }

    public function newCliente() {
        print $this->twig->render('clientes/editar.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Novo Clientes',
                    'page' => 'new_cliente',
                    'route' => route
        ));
    }

    public function getAll() {


        $getAll = $this->getDb('clientes', NULL);
        echo json_encode($getAll);
    }

    public function setPost() {

     
        $posts = $_POST;

        $this->clientes->setCliente($posts);
    }

}
