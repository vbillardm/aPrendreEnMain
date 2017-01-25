<?php
/**
 * Created by PhpStorm.
 * User: Madlax
 * Date: 25/01/2017
 * Time: 22:47
 */

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Hip\MandrillBundle\Message;
use Hip\MandrillBundle\Dispatcher;

/**
 * Newsletter controller.
 *
 * @Route("newsletter")
 */
class NewsletterController extends Controller
{
    /**
     * List all newsletter entities
     *
     * @Route("/", name="newsletter_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AcceuilBundle:Mail')->findAll();

        return $this->render('mail/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/email", name="email_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(){
        
    }
}