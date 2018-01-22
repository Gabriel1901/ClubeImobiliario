<?php

/*
 * Classe para validar o acesso do usuário
 */

/**
 * Description of LoginController
 * @author Projeto
 */

require_once '../config.php';
require_once 'models/usuario/UsuarioModel.php';

class LoginController {
    
    private $usuarioModel;
    
    public function __construct() {
        
        $this->usuarioModel = new UsuarioModel();
    }

    public function index() {

        $this->logar();
    }

    public function logar() {
        
        $img = img;
        include "views/login/index.php";
    }
    
    public function autenticar() {
        
       
        echo'encaminhar usuario, senha';
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        $sessao = $this->usuarioModel->auth($usuario,$senha);
      
         if ($sessao)
        {
            session_start();

            $_SESSION['usuario'] = '2072525faf0effb700b7d896b7468ff2500ea1ac';
            $_SESSION['id'] = $sessao['0']['id'];
            $_SESSION['user'] = $sessao['0']['nome'];
            $_SESSION['categoria'] = $sessao['0']['id_categoria'];


            header("location: painel");
        }else{
            header("location: index.php");
        } 
        
        exit;
    }

}
