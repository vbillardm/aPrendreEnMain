<?php

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AcceuilBundle\Entity\Post;
use AcceuilBundle\Entity\User;
use AcceuilBundle\Entity\Custom;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;

class AdminController extends Controller
{
    /**
     * @Route("admin")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('AcceuilBundle:News')->findAll();
        $users = $em->getRepository('AcceuilBundle:User')->findAll();
        $posts = $em->getRepository('AcceuilBundle:Post')->findAll();
        $custom = $em->getRepository('AcceuilBundle:Custom')->findAll();
        $mails = $em->getRepository('AcceuilBundle:Mail')->findAll();
        $user = $this->getUser();

        return $this->render('AcceuilBundle:Admin:index.html.twig',array(
          'posts' => $posts,
          'users' => $users,
          'user' => $user,
          'news' => $news,
          'custom' => $custom,
          'mails' => $mails,
        ));
    }

    /**
     * Creates a new news entity.
     *
     * @Route("/sendmail", name="send_mail")
     * @param Request $request
     * @Method({"POST"})
     */
    public function sendmail(Request $request)
    {
      $email = $request->request->get('email');
      $name = $request->request->get('name');
      $content = $request->request->get('content');
      $sujet = $request->request->get('sujet');

      $em = $this->getDoctrine()->getManager();

      $posts = $em->getRepository('AcceuilBundle:Post')->findAll();
      $users = $em->getRepository('AcceuilBundle:User')->findAll();
      $news = $em->getRepository('AcceuilBundle:News')->findAll();


      $message = \Swift_Message::newInstance()
            ->setSubject($sujet)
            ->setFrom("aprendreenmain17@gmail.com")
            ->setTo("aprendreenmain17@gmail.com")
            ->setBody("Vous avez reçu un mail de la part de :".$name."<br>Email du contact:".$email."<br>Contenu du mail: ".$content, 'text/html');
      $this->get('mailer')->send($message);
      $custom = $em->getRepository('AcceuilBundle:Custom')->findAll();
      $user = $this->getUser();

      return $this->render('AcceuilBundle:default:index.html.twig',array(
        'posts'=>$posts,
        'news'=>$news,
        'user'=>$user,
        'users' =>$users,
        'customs'=>$custom,
      ));
    }

    /**
     * Subscribe to newsletter
     *
     * @Route("/subscribe", name="subscribe_mail")
     * @param Request $request
     * @Method({"POST"})
     */
    public function subscribeNewsletter(Request $request){
        $mail = new Mail();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AcceuilBundle:User')->findAll();
        $user = $this->getUser();
        $custom = $em->getRepository('AcceuilBundle:Custom')->findAll();
        $name = $request->request->get('name');
        $email = $request->request->get('email');

        $mail->setName($name);
        $mail->setEmail($email);
        $em->persist($mail);
        $em->flush($mail);

        return $this->render('AcceuilBundle:default:index.html.twig', array(
            'user'=>$user,
            'users'=>$users,
            'customs'=>$custom,
        ));
    }
}
