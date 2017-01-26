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
     * Displays a form to edit an existing custom entity.
     *
     * @Route("/{id}/edit", name="custom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Custom $custom)
    {
        $editForm = $this->createForm('AcceuilBundle\Form\CustomType', $custom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
          $this->getDoctrine()->getManager()->flush();

          return $this->redirectToRoute('acceuil_admin_index');
        }

        return $this->render('custom/edit.html.twig', array(
            'custom' => $custom,
            'edit_form' => $editForm->createView(),
            'user' => $this->getUser(),
        ));
    }

    /**
     * Deletes a custom entity.
     *
     * @Route("/{id}", name="custom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Custom $custom)
    {
        $form = $this->createDeleteForm($custom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($custom);
            $em->flush($custom);
        }

        return $this->redirectToRoute('acceuil_admin_index');
    }
}

?>
