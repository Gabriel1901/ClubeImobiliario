<?php

namespace Lib\controllers;

use Adm\Models\get\CadastroModel;

use PDO;

require_once '../vendor/autoload.php';

/**
 * Description of Controllers
 *
 * @author Projeto
 */
abstract class Controllers {

    private $controller;
    private $action;
    private $params;
    private $url;
    public $twig;
    private $viewFoolder;
    private $loader;
    public $get;
    

    public function __construct() {


        $this->get = new CadastroModel();
   

        $url = isset($_GET['url']) ? $_GET['url'] : 'Imobiliaria';
        $this->getUrl(isset($url) ? $url : 'Imobiliaria');
        $this->viewFoolder = '../' . ucfirst($this->controller) . '/views';
        $this->loader = new \Twig_Loader_Filesystem($this->viewFoolder);
        $this->twig = new \Twig_Environment($this->loader);
    }

    public function getUrl($url) {

        $this->url = explode('/', $url);

        $this->controller = isset($this->url[0]) && $this->url[0] != 'login' ? $this->url[0] : 'Adm';
        $this->action = isset($this->url[1]) ? $this->url[1] : '';
        $this->params = isset($this->url[2]) ? $this->url[2] : '';
    }

}
