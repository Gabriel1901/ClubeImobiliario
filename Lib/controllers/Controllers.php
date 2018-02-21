<?php

namespace Lib\controllers;

use Adm;
use Adm\Models\get\CadastroModel;
use Adm\Models\clientes\ClientesModel;
use Adm\Models\marketing\CampanhaModel;
use Adm\Models\marketing\EmailsModels;
use PDO;

require_once '../vendor/autoload.php';
require_once '../autoload.php';

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
    public $clientes;
    public $campanhas;
    public $emails;

    public function __construct() {

        $this->campanhas = new CampanhaModel();
        $this->emails = new EmailsModels();
        $this->clientes = new ClientesModel();
        $this->get = new CadastroModel();


        $url = isset($_GET['url']) ? $_GET['url'] : 'Imobiliaria';
        $this->getUrl(isset($url) ? $url : 'Imobiliaria');

        $this->viewFoolder = '../' . ucfirst($this->controller) . '/Views';
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
