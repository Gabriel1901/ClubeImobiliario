<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adm\models\url;

use adm\app\page\Route;
use adm;
use PDO;
use adm\app\conexao\Conexao;

require_once 'autoload.php';

/**
 * Description of RouteModel
 *
 * @author Projeto
 */
class RouteModel extends Route {

    public function GetRoute($urls) {
        
        $url = $this->getUrl($urls);
        $action = $this->loadUrl($url);
        
        return $action[0];
        
         
    }

}
