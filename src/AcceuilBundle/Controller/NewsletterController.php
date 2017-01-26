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
            'user' => $user,
        ));
    }

    /**
      * Creates a newsletter.
      *
      *@Route("/new", name="newsletter_new")
      *@Method({"GET", "POST"})
      */
    public function newAction(Request $request){
      $form = $this->createForm('AcceuilBundle\Form\NewsletterType', null);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        $em = $this->getDoctrine()->getManager();
        return $this->sendAction($form->get('subject')->getData(), $form->get('content')->getData());
      }

      return $this->render('mail/new.html.twig', array(
          'form' => $form->createView(),
          'user' => $this->getUser(),
      ));
    }

    /**
      *Send mails
      *@Route("/send", name="newsletter_send")
      *@Method("GET")
      */
    public function sendAction($subject, $content){
        $em = $this->getDoctrine()->getManager();
        $table = [];
        $destination = $em->getRepository('AcceuilBundle:Mail')->findAll();
        foreach ($destination as $mail) {
          array_push($table, $mail->getEmail());
        }
          $message = \Swift_Message::newInstance()
              ->setSubject($subject)
              ->setFrom('aprendreenmain17@gmail.com')
              ->setTo($table)
              ->setBody($content);
          $this->get('mailer')->send($message);
        return $this->render('mail/send.html.twig', array(
            'user' => $this->getUser(),
        ));
    }
}
