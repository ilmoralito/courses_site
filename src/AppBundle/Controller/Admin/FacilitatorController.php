<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Facilitator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Facilitator controller.
 *
 * @Route("admin/facilitators")
 */
class FacilitatorController extends Controller
{
    /**
     * Lists all facilitator entities.
     *
     * @Route("/", name="admin_facilitators_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $facilitators = $em->getRepository('AppBundle:Facilitator')->findAll();

        return $this->render('admin/facilitator/index.html.twig', array(
            'facilitators' => $facilitators,
        ));
    }

    /**
     * Creates a new facilitator entity.
     *
     * @Route("/new", name="admin_facilitators_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $facilitator = new Facilitator();
        $form = $this->createForm('AppBundle\Form\FacilitatorType', $facilitator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facilitator);
            $em->flush();

            return $this->redirectToRoute('admin_facilitators_show', array('id' => $facilitator->getId()));
        }

        return $this->render('admin/facilitator/new.html.twig', array(
            'facilitator' => $facilitator,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a facilitator entity.
     *
     * @Route("/{id}", name="admin_facilitators_show")
     * @Method("GET")
     */
    public function showAction(Facilitator $facilitator)
    {
        $deleteForm = $this->createDeleteForm($facilitator);

        return $this->render('admin/facilitator/show.html.twig', array(
            'facilitator' => $facilitator,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing facilitator entity.
     *
     * @Route("/{id}/edit", name="admin_facilitators_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Facilitator $facilitator)
    {
        $editForm = $this->createForm('AppBundle\Form\FacilitatorType', $facilitator);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_facilitators_edit', array('id' => $facilitator->getId()));
        }

        return $this->render('admin/facilitator/edit.html.twig', array(
            'facilitator' => $facilitator,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a facilitator entity.
     *
     * @Route("/{id}", name="admin_facilitators_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Facilitator $facilitator)
    {
        $form = $this->createDeleteForm($facilitator);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($facilitator);
            $em->flush();
        }

        return $this->redirectToRoute('admin_facilitators_index');
    }

    /**
     * Creates a form to delete a facilitator entity.
     *
     * @param Facilitator $facilitator The facilitator entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Facilitator $facilitator)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_facilitators_delete', array('id' => $facilitator->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
