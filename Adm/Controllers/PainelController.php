<?php

namespace Adm\Controllers;

use Adm;
use Systema\Controller;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


  header("location: adm/login");

  exit;
  } 

require_once '../autoload.php';

class PainelController extends Controller {

    public function index() {

       
        print $this->twig->render('painel/index.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Painel de Controle',
                    'page' => 'index'
        ));
    }


  


}
