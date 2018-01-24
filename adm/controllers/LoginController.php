<?php

/*
 * Classe para validar o acesso do usuário
 */

/**
 * Description of LoginController
 * @author Projeto
 */
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
        
       
        $usuario = $_POST['user'];
        $senha = $_POST['password'];
        
       
        $sessao = $this->usuarioModel->auths($usuario, $senha);
        $sessaos = $this->usuarioModel->auth($usuario, $senha);
 
        
        if($sessao){
        session_start();

            $_SESSION['usuario'] = '2072525faf0effb700b7d896b7468ff2500ea1ac';
            $_SESSION['id'] = $sessao['0']['id'];
            $_SESSION['user'] = $sessao['0']['usuario'];
            
        }
    }
    
    public function iniciarSessao($sessao) {
        
        
       
            session_start();

            $_SESSION['usuario'] = '2072525faf0effb700b7d896b7468ff2500ea1ac';
            $_SESSION['id'] = $sessao['0']['id'];
            $_SESSION['user'] = $sessao['0']['usuario'];
            $_SESSION['categoria'] = $sessao['0']['id_categoria'];


           
       

        exit;
    }

    public function deslogar() {
        session_start();

        session_destroy();

        header("location: index.php?c=login");
    }

}
