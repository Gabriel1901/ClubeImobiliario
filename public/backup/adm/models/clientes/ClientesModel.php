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

    private $cdb_id;
    private $contato;
    private $nome;
    private $nome_fantasia;
    private $email;
    private $telefone;
    private $cnpj;
    private $status;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $numero;
    private $cep;

    public function setCliente($posts) {


        $posts = $_POST;

        $this->cdb_id = $posts['cdb_id'];
        $this->contato = $posts['contato'];
        $this->nome = $posts['nome'];
        $this->nome_fantasia = $posts['nome_fantasia'];
        $this->email = $posts['email'];
        $this->telefone = $posts['cnpj'];
        $this->cnpj = $posts['cnpj'];
        $this->status = $posts['status'];
        $this->rua = $posts['rua'];
        $this->numero = $posts['numero'];
        $this->bairro = $posts['bairro'];
        $this->cidade = $posts['cidade'];
        $this->estado = $posts['estado'];
        $this->cep = $posts['cep'];

        


        $tab = 'clientes';

        if (isset($_GET['clientes']) && $_GET['clientes'] != 'false') {

            $id = $_GET['clientes'];
            $this->update($posts, $id, $tab);
        } else {
            $this->inserte($posts, $tab);
        }
    }

    public function inserte($posts, $tab) {

        $post = [
            'cdb_id' => $this->cdb_id,
            'contato' => "'".$this->contato."'",
            'nome' => "'".$this->nome."'",
            'nome_fantasia' => "'".$this->nome_fantasia."'",
            'email' => "'".$this->email."'",
            'telefone' => "'".$this->telefone."'",
            'cnpj' => "'".$this->cnpj."'",
            'status' => $this->status,
            'rua' => "'".$this->rua."'",
            'numero' => $this->numero,
            'bairro' => "'".$this->bairro."'",
            'cidade' => "'".$this->cidade."'",
            'estado' => "'".$this->estado."'",
            'cep' => $this->cep
        ];
        
        $new = $this->inserts($post, $tab);
        $texto = 'Cadastro realizado com sucesso !!!';
        echo json_encode($texto);
    }

    public function update($post, $id, $tab) {

        $post = [
            'cdb_id' => $this->cdb_id,
            'contato' => $this->contato,
            'nome' => $this->nome,
            'nome_fantasia' => $this->nome_fantasia,
            'email' => $this->email,
            'telefone' => $this->telefone,
            'cnpj' => $this->cnpj,
            'status' => $this->status,
            'rua' => $this->rua,
            'numero' => $this->numero,
            'bairro' => $this->bairro,
            'cidade' => $this->cidade,
            'estado' => $this->estado,
            'cep' => $this->cep
        ];

        $up = $this->updates($id, $post, $tab);

        $texto = 'Alterado com sucesso !!!';
        echo json_encode($texto);
    }

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
