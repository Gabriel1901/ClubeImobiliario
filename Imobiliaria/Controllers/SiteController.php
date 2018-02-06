<?php

namespace Imobiliaria\Controllers;

use Systema\Controller;

class SiteController extends controller {

    public function index() {

        $this->site();
    }

    public function site() {


        print $this->twig->render('site/index.twig', array(
                    
        ));
    }

}
