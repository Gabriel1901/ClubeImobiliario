<?php

/*
 * Classe de usuarios.
 */

/**
 * Description of UsuarioModel
 *
 * @author Projeto
 */

require_once '../app/conexao/Conexao_adm.php';
class UsuarioModel {
    
    private $con;
    
    public function __construct() {
        
        $this->con = new Conexao();
    }

    public function auth($usuario, $senha) {


        if ($usuario != "" && $usuario != null && $senha != "" && $senha != null) {

            $sql = 'SELECT * FROM cdb_usuario where usuario = "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


            $exec = $this->con->pdo()->prepare($sql);

            $exec->execute();

            $sessao = $exec->fetchAll(PDO::FETCH_ASSOC);

            return $sessao;
        } else {
            
        }
    }

    public function getById($param) {
        
    }

}
