<?php

/*
 * Rota de paginas do site
 */

namespace adm\lib\route;

use adm\lib\conexao\Conexao;
use PDO;

require_once 'autoload.php';
require_once 'config.php';

/**
 * Description of Route
 *
 * @author Projeto
 */
abstract class Route {

    public $url;
    public $controller;
    public $action = 'index';
    public $params;
    public $con;
    public $layout;

    public function __construct() {
        $this->con = new Conexao();
    }

    public function getUrl($url) {

        $route = explode("/", $url);
        $this->controller = $route[0];
        $this->action = isset($route[1]) ? $route[1] : NULL;
    }

    public function getLayout() {

        if (!(isset($this->action))) {
            $this->action = $this->controller;
        }

        $sql = 'SELECT * FROM cdb_layout_route where route="' . $this->action . '"';

        $layout = $this->con->pdo()->prepare($sql);
        $layout->execute();
        $getLayout = $layout->fetchAll(PDO::FETCH_ASSOC);


        return $getLayout[0];
    }

}
