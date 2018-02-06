<?php

/*
 * Contador de visitas.
 */

/**
 * Description of AcessoModel
 *
 * @author Projeto
 */

require_once 'conexao/Conexao.php';

class AcessoModel {
    
     private $con;
     private $data;
     private $contador;

    public function __construct() {
        $this->con = new Conexao();
        $this->data = date("Y-m-d H:i:s");
        
    }
    
    public function contarAcesso($p, $id) {
        if(!($id)){
            $id=0;
        }
         $sql = "INSERT INTO aw_acesso (pagina, data, id_cliente) VALUES (".$p.", '".$this->data."', ".$id.")";

        
        $capture = $this->con->pdo()->prepare($sql);
        $capture->execute();
        
        


    }
    
}
