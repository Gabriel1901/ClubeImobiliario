<?php

namespace adm\controllers;

use adm;
use adm\models\clientes\ClientesModel;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'autoload.php';

/**
 * Description of clientesControllers
 *
 * @author Projeto
 */
class ClientesController {

    private $clientes;
    private $id_cdb;
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

    public function __construct() {


        $this->clientes = new ClientesModel();
    }

    public function index() {
        
    }

    public function getAll() {

        $getAll = $this->clientes->selectAllCliente();
        echo json_encode($getAll);
    }

    public function update() {


        $post = $_POST;
        $id = $_GET['clientes'];
        $tab = 'clientes';


        $up = $this->clientes->updates($id, $post, $tab);

        $texto = 'Alterado com sucesso !!!';
        echo json_encode($texto);
    }

    public function insert() {

        $posts = $_POST;

        $this->id_cdb = $posts['id_cdb'];
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

        $post = [
            'id_cdb' => $this->id_cdb,
            'contato' => '"' .$this->contato.'"',
            'nome' => '"' .$this->nome.'"',
            'nome_fantasia' => '"' .$this->nome_fantasia.'"',
            'email' => '"'.$this->email.'"',
            'telefone' => $this->telefone,
            'cnpj' => $this->cnpj,
            'status' => '"'.$this->status.'"',
            'rua' => '"'.$this->rua.'"',
            'numero' => $this->numero,
            'bairro' => '"'.$this->bairro.'"',
            'cidade' => '"'.$this->cidade.'"',
            'estado' => '"'.$this->estado.'"',
            'cep' => $this->cep
                ];

        $tab = 'clientes';


        $new = $this->clientes->inserts($post, $tab);
        $texto = 'Cadastro realizado com sucesso !!!';
        echo json_encode($texto);
    }

}
