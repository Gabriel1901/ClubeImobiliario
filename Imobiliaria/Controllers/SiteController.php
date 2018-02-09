<?php

namespace Imobiliaria\Controllers;

use Systema\Controller;

class SiteController extends controller {

    public function index() {

        $this->site();
    }

    public function site() {
        
        print $this->twig->render('site/index.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'modulos' => $this->getDb('modulos_route', 1),
                    'modTitulos' => $this->getDb('modulos', NULL),
                    'conteudos' => $this->getDb('modulos_conteudos', NULL),
                    'sliders' => $this->getDb('home_sliders', '1')
        ));
    }

}
