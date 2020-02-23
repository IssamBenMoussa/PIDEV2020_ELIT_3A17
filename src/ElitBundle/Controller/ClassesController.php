<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Classes;
use ElitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('classes/index.html.twig', array(
            'classes' => $classes,
            'notifications' => $notif,
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

            return $this->redirectToRoute('classes_index', array('id' => $class->getId()));
        }
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('classes/new.html.twig', array(
            'class' => $class,
            'form' => $form->createView(),
            'notifications' => $notif
        ));
    }

    /**
     * Finds and displays a class entity.
     *
     */
    public function showAction(Classes $class)
    {
        $deleteForm = $this->createDeleteForm($class);
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('classes/show.html.twig', array(
            'class' => $class,
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif,
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
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('classes/edit.html.twig', array(
            'class' => $class,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif
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
     * Deletes a class entity by id.
     *
     */
    Public function altDeleteAction($id)

    {
        $em = $this->getDoctrine()->getManager();
        $class = $em->getRepository(Classes::class)->find($id);
        $em->remove($class);
        $em->flush();
        $response['success'] = true;
        $response['message'] = 'Deleted Successfully!';
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $render = $this->render('Classes/index.html.twig', array(
            'classes' => $class,
            'notifications' => $notif,
        ));



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
