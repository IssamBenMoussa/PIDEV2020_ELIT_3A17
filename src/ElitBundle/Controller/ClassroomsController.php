<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Classrooms;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Classroom controller.
 *
 */
class ClassroomsController extends Controller
{
    /**
     * Lists all classroom entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $classrooms = $em->getRepository('ElitBundle:Classrooms')->findAll();

        return $this->render('classrooms/index.html.twig', array(
            'classrooms' => $classrooms,
        ));
    }

    /**
     * Creates a new classroom entity.
     *
     */
    public function newAction(Request $request)
    {
        $classroom = new Classrooms();
        $form = $this->createForm('ElitBundle\Form\ClassroomsType', $classroom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($classroom);
            $em->flush();

            return $this->redirectToRoute('classrooms_show', array('id' => $classroom->getId()));
        }

        return $this->render('classrooms/new.html.twig', array(
            'classroom' => $classroom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a classroom entity.
     *
     */
    public function showAction(Classrooms $classroom)
    {
        $deleteForm = $this->createDeleteForm($classroom);

        return $this->render('classrooms/show.html.twig', array(
            'classroom' => $classroom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing classroom entity.
     *
     */
    public function editAction(Request $request, Classrooms $classroom)
    {
        $deleteForm = $this->createDeleteForm($classroom);
        $editForm = $this->createForm('ElitBundle\Form\ClassroomsType', $classroom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classrooms_edit', array('id' => $classroom->getId()));
        }

        return $this->render('classrooms/edit.html.twig', array(
            'classroom' => $classroom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a classroom entity.
     *
     */
    public function deleteAction(Request $request, Classrooms $classroom)
    {
        $form = $this->createDeleteForm($classroom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($classroom);
            $em->flush();
        }

        return $this->redirectToRoute('classrooms_index');
    }

    /**
     * Creates a form to delete a classroom entity.
     *
     * @param Classrooms $classroom The classroom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Classrooms $classroom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classrooms_delete', array('id' => $classroom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
