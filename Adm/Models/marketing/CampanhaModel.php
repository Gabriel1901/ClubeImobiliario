<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Adm\Models\marketing;

use Lib\cadastro\Cadastro;
use PDO;

require_once '../autoload.php';

/**
 * Description of CampanhaModel
 *
 * @author Projeto
 */
class CampanhaModel extends Cadastro {

    private $campanhas_id;
    private $nome;
    private $status;
    private $data_inicio;
    private $data_fim;

    public function setCampanha($post) {

        
        $getid = isset($_GET['campanha']);
        $this->campanhas_id =  $getid != NULL ? $getid : NULL;

        
        $this->nome         = $post['nome'];
        $this->status       = $post['status'];
        $this->data_inicio  = $post['data_inicio'];
        $this->data_fim     = $post['data_fim'];




        $tab = 'campanhas';

        if ($id != 'false') {

            $id = $this->campanhas_id;
            $this->update($post, $id, $tab);
        } else {
            $this->inserte($post, $tab);
        }
    }

    public function inserte($post, $tab) {

        $post = [
            'nome' => "'" . $this->nome . "'",
            'status' => $this->status,
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim
        ];

        $new = $this->inserts($post, $tab);
        $texto = 'Cadastro realizado com sucesso !!!';
        echo json_encode($texto);
    }
    
      public function update($post, $id, $tab) {

        $post = [
             'nome' => "'" . $this->nome . "'",
            'status' => $this->status,
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim
        ];

        $up = $this->updates($id, $post, $tab);

        $texto = 'Alterado com sucesso !!!';
        echo json_encode($texto);
    }

}
