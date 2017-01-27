<?php

namespace AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $news = $em->getRepository('AcceuilBundle:News')->findAll();
      $users = $em->getRepository('AcceuilBundle:User')->findAll();
      $posts = $em->getRepository('AcceuilBundle:Post')->findAll();
      $customs = $em->getRepository('AcceuilBundle:Custom')->findAll();
      $user = $this->getUser();
      return $this->render('AcceuilBundle:Default:index.html.twig',array(
        'posts' => $posts,
        'users' => $users,
        'user' => $user,
        'news' => $news,
        'customs' => $customs,
        'users_images_path' => $this->getParameter('images_users_directory'),
      ));
    }
}
