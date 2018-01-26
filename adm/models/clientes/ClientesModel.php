<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adm\models\clientes;

use adm;
use PDO;
use adm\app\conexao\Conexao;

require_once 'autoload.php';

/**
 * Description of ClientesModel
 *
 * @author Projeto
 */
class ClientesModel {

    private $con;

    public function __construct() {
        $this->con = new Conexao();
    }

    public function insertClientes() {


        $Clientes = 'INSERT INTO aw_product_image
                (product_id, image) 
                VALUES (' . $id . ',"catalog/' . $idImg . '");';

        $produtos = $this->con->pdo()->prepare($allP);
        $produtos->execute();
    }

    public function selectAllClientes() {
        $sql = 'select * from cdb_clientes;';

        $clientes = $this->con->pdo()->prepare($sql);
        $clientes->execute();

        $todosClientes = $clientes->fetchAll(PDO::FETCH_ASSOC);
        //echo json_encode($todosClientes);

        return $todosClientes;
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
