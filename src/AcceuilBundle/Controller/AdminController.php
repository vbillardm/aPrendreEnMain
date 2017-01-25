<?php

namespace AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AcceuilBundle\Entity\Post;
use AcceuilBundle\Entity\User;
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
        $configs = $em->getRepository('AcceuilBundle:Config')->findAll();
        $user = $this->getUser();

        return $this->render('AcceuilBundle:Admin:index.html.twig',array(
          'posts' => $posts,
          'users' => $users,
          'user' => $user,
          'news' => $news,
          'configs' => $users
        ));
    }
}
