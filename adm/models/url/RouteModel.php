<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace adm\models\url;

use adm\lib\route\Route;
use adm;

require_once 'autoload.php';

/**
 * Description of RouteModel
 *
 * @author Projeto
 */
class RouteModel extends Route {

    private $layoutPage;
 

    public function getLayoutPage() {
    $layout = isset($this->getLayout()['name_layout']) && $this->getLayout()['name_layout']!= $this->controller ? $this->getLayout()['name_layout'] :"index";

    $get = $this->controller."/".$layout;

    return $get;
}

}
