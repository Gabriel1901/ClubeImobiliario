<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adm\models\clientes;

use adm\lib\cadastro\Cadastro;
use PDO;
use adm;

require_once 'autoload.php';

/**
 * Description of ClientesModel
 *
 * @author Projeto
 */
class ClientesModel extends Cadastro {

    public function selectAllCliente() {
        $clientes = $this->selectAllClientes('clientes');

        return $clientes;
    }

    public function selectIdClientes($id) {
        $sql = 'select * from cdb_clientes;';

        $clientes = $this->con->pdo()->prepare($sql);
        $clientes->execute();

        $clientes = $clientes->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($clientes);

        return;
    }

   

}
