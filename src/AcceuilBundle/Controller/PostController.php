<?php

namespace AcceuilBundle\Controller;

use AcceuilBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
/**
 * Post controller.
 *
 * @Route("post")
 */
class PostController extends Controller
{
    /**
     * Lists all post entities.
     *
     * @Route("/", name="post_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $uM = $this->get('fos_user.user_manager');
        $user = $this->getUser();

        $posts = $em->getRepository('AcceuilBundle:Post')->findAll();
        if(count($posts) > 3)
        {
          $postsLimit3 = array_slice($posts,-3,3,true);
          return $this->render('post/index.html.twig', array(
              'posts' => $postsLimit3,
              'user' => $user,
          ));
        }

        return $this->render('post/index.html.twig', array(
            'posts' => $posts,
            'user' => $user,
        ));
    }

    /**
     * Creates a new post entity.
     *
     * @Route("/new", name="post_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $post = new Post();
        $form = $this->createForm('AcceuilBundle\Form\PostType', $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gets the user
            $user = $this->getUser();

            // Gets the image from the form
            $file = $post->getPath();

            // Generates an unique ID for the image
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Moves the image to the post images directory
            $file->move(
                $this->getParameter('images_posts_directory'),
                $fileName
            );

            $em = $this->getDoctrine()->getManager();

            $post->setAuthor($user);
            $post->setPath($fileName);
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_show', array('id' => $post->getId()));
        }

        return $this->render('post/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
            'user' => $this->getUser(),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     * @Route("/{id}", name="post_show")
     * @Method("GET")
     */
    public function showAction(Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $user = $this->getUser();

        return $this->render('post/show.html.twig', array(
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
            'user' => $user,
        ));
    }

    /**
     * Displays a form to edit an existing post entity.
     *
     * @Route("/{id}/edit", name="post_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Post $post)
    {
        $oldPath = $post->getPath();
        $post->setPath(
            new File($this->getParameter('images_posts_directory').'/'.$post->getPath())
        );
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('AcceuilBundle\Form\PostType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            // Gets the user
            $user = $this->getUser();

            // Gets the image from the form
            $file = $post->getPath();

            // Generates an unique ID for the image
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Moves the image to the post images directory
            $file->move(
                $this->getParameter('images_posts_directory'),
                $fileName
            );

            // Removes the old file
            unlink($this->getParameter('images_posts_directory') . "/" . $oldPath);

            // Changes the values
            $post->setAuthor($user);
            $post->setPath($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('post_edit', array(
                'id' => $post->getId(),
                'user' => $this->getUser(),
            ));
        }

        return $this->render('post/edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'user' => $this->getUser(),
        ));
    }

    /**
     * Deletes a post entity.
     *
     * @Route("/{id}", name="post_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush($post);
        }

        return $this->redirectToRoute('post_index');
    }

    /**
     * Creates a form to delete a post entity.
     *
     * @param Post $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
