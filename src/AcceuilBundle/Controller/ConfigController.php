<?php

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Config controller.
 *
 * @Route("config")
 */
class ConfigController extends Controller {

    /**
     * Lists all config entities.
     *
     * @Route("/", name="config_index")
     * @Method("GET")
     */
    public function indexAction() {
        
    }





}


?>
