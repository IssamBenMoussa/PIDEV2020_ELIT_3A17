<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Classes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class controller.
 *
 */
class ClassesController extends Controller
{
    /**
     * Lists all class entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $classes = $em->getRepository('ElitBundle:Classes')->findAll();

        return $this->render('classes/index.html.twig', array(
            'classes' => $classes,
        ));
    }

    /**
     * Creates a new class entity.
     *
     */
    public function newAction(Request $request)
    {
        $class = new Classes();
        $form = $this->createForm('ElitBundle\Form\ClassesType', $class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($class);
            $em->flush();

            return $this->redirectToRoute('classes_show', array('id' => $class->getId()));
        }

        return $this->render('classes/new.html.twig', array(
            'class' => $class,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a class entity.
     *
     */
    public function showAction(Classes $class)
    {
        $deleteForm = $this->createDeleteForm($class);

        return $this->render('classes/show.html.twig', array(
            'class' => $class,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing class entity.
     *
     */
    public function editAction(Request $request, Classes $class)
    {
        $deleteForm = $this->createDeleteForm($class);
        $editForm = $this->createForm('ElitBundle\Form\ClassesType', $class);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('classes_edit', array('id' => $class->getId()));
        }

        return $this->render('classes/edit.html.twig', array(
            'class' => $class,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a class entity.
     *
     */
    public function deleteAction(Request $request, Classes $class)
    {
        $form = $this->createDeleteForm($class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($class);
            $em->flush();
        }

        return $this->redirectToRoute('classes_index');
    }

    /**
     * Creates a form to delete a class entity.
     *
     * @param Classes $class The class entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Classes $class)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('classes_delete', array('id' => $class->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
