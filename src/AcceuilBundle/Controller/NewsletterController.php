<?php

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\Mail;
use AcceuilBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
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

        $mails = $em->getRepository('AcceuilBundle:Mail')->findAll();

        $user = $this->getUser();

        return $this->render('mail/index.html.twig', array(
            'mails' => $mails,
            'user' => $user
        ));
    }
}
