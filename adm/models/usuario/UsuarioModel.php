<?php

/*
 * Classe de usuarios.
 */

/**
 * Description of UsuarioModel
 *
 * @author Projeto
 */
require_once '../app/conexao/Conexao.php';
require_once 'config.php';

class UsuarioModel {

    private $con;

    public function __construct() {

        $this->con = new Conexao();
    }

    public function auth($usuario, $senha) {


        $sql = 'SELECT senha, usuario FROM '.db_p.'usuario where usuario = "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


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


        $sql = 'SELECT  id, usuario FROM '.db_p.'usuario where usuario = "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


        $get = $this->con->pdo()->prepare($sql);
        $get->execute();
        $dados = $get->fetchAll(PDO::FETCH_ASSOC);

        
        return $dados;
    }

}
