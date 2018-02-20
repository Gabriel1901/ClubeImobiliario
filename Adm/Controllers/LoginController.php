<?php

namespace Adm\Controllers;

use Systema\Controller;
use Adm\models\usuario\UsuarioModel;

/*
 * Classe para validar o acesso do usuário
 */

/**
 * Description of LoginController
 * @author Projeto
 */
require_once '../autoload.php';
require_once '../config.php';

class LoginController extends Controller {

    private $usuarioModel;

    public function index() {
       
        $this->logar();
    }

    public function logar() {


        print $this->twig->render('login/index.twig', array(
            'titulo' => 'Login'
        ));
    }

    public function autenticar() {
        $this->usuarioModel = new UsuarioModel();

        $usuario = $_POST['user'];
        $senha = $_POST['password'];


        $sessao = $this->usuarioModel->auths($usuario, $senha);


        $this->usuarioModel->auth($usuario, $senha);



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

        header("location: ".route);
    }

}
