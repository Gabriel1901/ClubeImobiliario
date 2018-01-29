<?php

namespace adm\controllers;

use adm\models\login;

/*
 * Classe para validar o acesso do usuário
 */

/**
 * Description of LoginController
 * @author Projeto
 */
require_once 'autoload.php';

class LoginController {

    private $usuarioModel;
    private $indexPage = "../public/index.php";

    public function __construct() {

        $this->usuarioModel = new login\LogarModel();
    }

    public function index() {

        $this->logar();
    }

    public function logar() {
        $img = img;
        $page = 'login/index';
        include $this->indexPage;
    }

    public function autenticar() {


        $usuario = $_POST['user'];
        $senha = $_POST['password'];


        $sessao = $this->usuarioModel->auths($usuario, $senha);
        
        $sessaos = $this->usuarioModel->auth($usuario, $senha);

        

        if ($sessao) {
            session_start();

            $_SESSION['usuario'] = '2072525faf0effb700b7d896b7468ff2500ea1ac';
            $_SESSION['id'] = $sessao['0']['usuario_id'];
            $_SESSION['user'] = $sessao['0']['usuario'];
            $_SESSION['cat'] = $sessao['0']['categoria'];
        }
    }

    public function deslogar() {
        session_start();

        session_destroy();

        header("location: ../");
    }

}
