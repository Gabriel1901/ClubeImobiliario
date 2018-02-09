<?php

namespace Systema;

use Lib\controllers\Controllers;
use pdo;

/**
 * Description of Controller
 *
 * @author Projeto
 */
abstract class Controller extends Controllers {


    public function getDb($tab,$status) {

        $slider = $this->get->selectAll($tab,$status);

        return $slider;
    }
    

}
