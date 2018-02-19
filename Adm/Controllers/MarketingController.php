<?php

namespace Adm\Controllers;

session_start();

if (!(isset($_SESSION['usuario']) && $_SESSION['usuario'] == '2072525faf0effb700b7d896b7468ff2500ea1ac')) {


    header("location: login");

    exit;
}

use Adm;
use Systema\Controller;

require_once '../autoload.php';

/**
 * Description of MarketingController
 *
 * @author Projeto
 */
class MarketingController extends Controller {

    public function index() {

        print $this->twig->render('marketing/index.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Campanhas',
                    'page' => 'list_campanha',
                    'route' => route,
                    'classe' => 'adm/marketing/'
        ));
    }

    public function newCampanha() {

        print $this->twig->render('marketing/novaCampanha.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Campanha',
                    'page' => 'new_campanha',
                    'route' => route
        ));
    }

    public function fichaDeCadastro() {

        print $this->twig->render('marketing/fichaDeCadastro.twig', array(
                    'empresa' => $this->getDb('empresa', NULL)[0],
                    'titulo' => 'Painel de Controle',
                    'page' => 'index',
                    'route' => route
        ));
    }

}
