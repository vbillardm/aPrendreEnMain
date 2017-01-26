<?php

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\Custom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * News controller.
 *
 * @Route("custom")
 */
class CustomController extends Controller
{

    /**
     * Lists all custom entities.
     *
     * @Route("/", name="custom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('AcceuilBundle:News')->findAll();

        return $this->render('news/index.html.twig', array(
            'news' => $news,
        ));
    }


    /**
     * Displays a form to edit an existing custom entity.
     *
     * @Route("/{id}/edit", name="custom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, News $news)
    {

    }
}

?>
