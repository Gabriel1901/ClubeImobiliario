<?php

namespace Adm\Controllers;

use Adm;
use Adm\Models\clientes\ClientesModel;

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
class ClientesController {

   private $clientes;
    
    public function __construct() {


        $this->clientes = new ClientesModel();
    }

    public function index() {
        
    }

    public function getAll() {

        $getAll = $this->clientes->selectAllCliente();
        echo json_encode($getAll);
    }

    public function setPost() {

        
        $posts = $_POST;

        $this->clientes->setCliente($posts);
        
        
    }

    

}
