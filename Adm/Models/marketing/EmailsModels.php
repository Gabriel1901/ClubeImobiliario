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
class EmailsModels extends Cadastro {

    private $campanhas_emails_id;
    private $titulo;
    private $texto;
    private $status;
    private $ordem;
    private $campanhas_id;

    public function setEmails($post) {

      
        $getid = isset($_GET['email']);
        $this->campanhas_emails_id = $getid != NULL ? $getid : 'false';

        $this->titulo = $post['titulo'];
        $this->texto = $post['texto'];
        $this->status = $post['status'];
        $this->ordem = $post['ordem'];
        $this->campanhas_id = isset($post['campanhas_id'])?$post['campanhas_id']:'false';





        $tab = 'campanhas_emails';

        if ($getid != 'false') {

            $id = $this->campanhas_emails_id;
            $this->update($post, $id, $tab);
        } else {
            $this->inserte($post, $tab);
        }
    }

    public function inserte($post, $tab) {

        $post = [
            'titulo' => "'" . $this->titulo . "'",
            'status' => $this->status,
            'texto' => "'" . $this->texto. "'",
            'ordem' => $this->ordem
        ];

        $new = $this->inserts($post, $tab);
        $texto = 'Cadastro realizado com sucesso !!!';
        echo json_encode($new );
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
