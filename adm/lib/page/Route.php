<?php

/*
 * Classe para carregar Layout
 */

namespace adm\lib\page;

use adm\lib\conexao\Conexao;
use PDO;

require_once 'autoload.php';
require_once 'config.php';

/**
 * Description of Layout
 *
 * @author Projeto
 */
abstract class Route {

    private $con;

    public function __construct() {
        $this->con = new \adm\lib\conexao\Conexao();
    }

    public function getUrl($url) {
        $rota = isset($url) ? explode("/", $url) : "";
        $action = isset($rota[1]) && $rota[1] !== "" ? $rota[1] : "$url";



        return $action;
    }

    public function loadUrl($action) {


        $sql = 'SELECT * FROM cdb_layout_route where route="' . $action . '"';

        $url = $this->con->pdo()->prepare($sql);
        $url->execute();
        $getUrl = $url->fetchAll(PDO::FETCH_ASSOC);


        if ($getUrl[0]['route'] === "painel") {
            $getUrl[0]['route'] .= '/index';
        }
        return $getUrl[0];
    }

}
