<?php

namespace adm\models\usuario;

use \Lib\conexao\Conexao;
use \PDO;

/*
 * Classe de usuarios.
 */

/**
 * Description of UsuarioModel
 *
 * @author Projeto
 */
require_once '../autoload.php';
require_once '../config.php';

class UsuarioModel extends \Systema\Controller {

    private $con;

    public function auth($usuario, $senha) {

        $this->con = new Conexao();

        $sql = 'SELECT senha, usuario FROM ' . db_p . 'usuario where usuario = "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


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
        $this->con = new Conexao();


        $sql = 'SELECT  usuario_id, usuario FROM ' . db_p . 'usuarios where usuario= "' . $usuario . '" && senha ="' . $senha . '" && status = 1';


        $get = $this->con->pdo()->prepare($sql);
        $get->execute();
        $dados = $get->fetchAll(PDO::FETCH_ASSOC);

        echo'<pre><hr>';
        print_r($dados);
        echo'<hr></pre>';


        return $dados;
    }

}
