<?php

namespace Adm\Models\login;

use Lib\conexao\Conexao;

use PDO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogarModel
 *
 * @author Projeto
 */

require_once '../autoload.php';

class LogarModel {
    
       private $con;

    public function __construct() {

        $this->con = new Conexao();
    }

    public function auth($usuario, $senha) {


        $sql = 'SELECT senha, usuario FROM '.db_p.'usuarios where usuario = "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


        $get = $this->con->pdo()->prepare($sql);
        $get->execute();
        $dados = $get->fetchAll(PDO::FETCH_ASSOC);

     
        if ($dados) {
            
            echo json_encode($dados);
        } else {
            
        }
        return;
    }
    public function auths($usuario, $senha) {


        $sql = 'SELECT 
    usuario_id, usuario, cat.nome as categoria
    
FROM
    cdb_usuarios usu
        LEFT JOIN
    cdb_usuarios_categoria cat ON cat.usuario_categoria_id = usu.id_categoria where usuario = "' . $usuario . '" && senha ="' . $senha . '" && usu.status = 1';
        
        $get = $this->con->pdo()->prepare($sql);
        $get->execute();
        $dados = $get->fetchAll(PDO::FETCH_ASSOC);

        
        return $dados;
    }
    
}
