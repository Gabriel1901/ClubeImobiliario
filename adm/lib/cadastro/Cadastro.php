<?php

namespace adm\lib\cadastro;

use adm\lib\conexao\Conexao;
use PDO;
use adm;

require_once 'autoload.php';

/**
 * Description of Cadastro Crud com o banco de dados
 *
 * @author Projeto
 */
abstract class Cadastro {

    //put your code here

    private $con;

    public function __construct() {
        $this->con = new Conexao();
    }

    public function insertClientes($id, $post, $tab) {


        $sql = 'INSERT INTO aw_product_image
                (product_id, image) 
                VALUES (' . $id . ',"catalog/' . $idImg . '");';

        $insert = $this->con->pdo()->prepare($sql);
        $insert->execute();
    }

    public function edit($post, $id, $tab) {
        $sql = "UPDATE " . db_p . $tab . " SET " . $post['col'] . "='" . $post['edit'] . "' WHERE " . $tab . "_id ='" . $id . "';";

        $up = $this->con->pdo()->prepare($sql);
        $up->execute();

    }

    public function update($id, $post, $tab) {

        foreach ($post as $k => $v) {
            $conteudo = strtolower($v);

            $iniciar = curl_init();

            curl_setopt($iniciar, CURLOPT_RETURNTRANSFER, true);
            $dados = array(
                'col' => $k,
                'edit' => $v
            );


            curl_setopt($iniciar, CURLOPT_PORT, true);

            curl_setopt($iniciar, CURLOPT_POSTFIELDS, $dados);

            curl_exec($iniciar);

            curl_close($iniciar);
            $get = $this->edit($dados, $id, $tab);
        }
    }

    public function selectAllClientes($tab) {
        $sql = 'select * from ' . db_p . $tab;

        $colun = $this->con->pdo()->prepare($sql);
        $colun->execute();

        $allColun = $colun->fetchAll(PDO::FETCH_ASSOC);

        return $allColun;
    }

    public function selectId($tab, $id) {
        $sql = 'select * from ' . $tab . ' where ' . $id . '=' . $id . 'end status=1';

        $clientes = $this->con->pdo()->prepare($sql);
        $clientes->execute();

        $clientes = $clientes->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($clientes);

        return;
    }

    public function deleteId($tab, $id) {
        $sql = "UPDATE " . db_p . $tab . " SET status=0 WHERE " . $tab . "_id ='" . $id . "';";

        $up = $this->con->pdo()->prepare($sql);
        $up->execute();
    }

}