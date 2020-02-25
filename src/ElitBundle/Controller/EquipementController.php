<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Equipement;
use ElitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Equipement controller.
 *
 */
class EquipementController extends Controller
{
    /**
     * Lists all equipement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $equipements = $em->getRepository('ElitBundle:Equipement')->findAll();
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('equipement/index.html.twig', array(
            'equipements' => $equipements,
            'notifications' => $notif,
        ));
    }

    /**
     * Creates a new equipement entity.
     *
     */
    public function newAction(Request $request)
    {
        $equipement = new Equipement();
        $form = $this->createForm('ElitBundle\Form\EquipementType', $equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipement);
            $em->flush();

            return $this->redirectToRoute('equipement_show', array('id' => $equipement->getId()));
        }
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('equipement/new.html.twig', array(
            'equipement' => $equipement,
            'form' => $form->createView(),
            'notifications' => $notif,
        ));
    }

    /**
     * Finds and displays a equipement entity.
     *
     */
    public function showAction(Equipement $equipement)
    {
        $deleteForm = $this->createDeleteForm($equipement);
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('equipement/show.html.twig', array(
            'equipement' => $equipement,
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif,
        ));
    }

    /**
     * Displays a form to edit an existing equipement entity.
     *
     */
    public function editAction(Request $request, Equipement $equipement)
    {
        $deleteForm = $this->createDeleteForm($equipement);
        $editForm = $this->createForm('ElitBundle\Form\EquipementType', $equipement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('equipement_edit', array('id' => $equipement->getId()));
        }
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('equipement/edit.html.twig', array(
            'equipement' => $equipement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif
        ));
    }

    /**
     * Deletes a equipement entity.
     *
     */
    public function deleteAction(Request $request, Equipement $equipement)
    {
        $form = $this->createDeleteForm($equipement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($equipement);
            $em->flush();
        }

        return $this->redirectToRoute('equipement_index');
    }

    /**
     * Creates a form to delete a equipement entity.
     *
     * @param Equipement $equipement The equipement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Equipement $equipement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('equipement_delete', array('id' => $equipement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
