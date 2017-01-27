<?php

namespace AcceuilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AcceuilBundle\Entity\News;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

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
    /**
     * Finds and displays a news entity.
     *
     * @Route("show/{id}", name="new_show")
     * @Method("GET")
     */
    public function show(News $news)
    {
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();
      $posts = $em->getRepository('AcceuilBundle:Post')->findAll();

      return $this->render('AcceuilBundle:Default:show.html.twig',array(
        'news' => $news,
        'user' => $user,
        'posts' => $posts,
      ));

    }
}
