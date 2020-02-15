<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Schoolmeeting;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Schoolmeeting controller.
 *
 * @Route("schoolmeeting")
 */
class SchoolmeetingController extends Controller
{
    /**
     * Lists all schoolmeeting entities.
     *
     * @Route("/", name="schoolmeeting_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $schoolmeetings = $em->getRepository('ElitBundle:Schoolmeeting')->findAll();

        return $this->render('schoolmeeting/index.html.twig', array(
            'schoolmeetings' => $schoolmeetings,
        ));
    }

    /**
     * Creates a new schoolmeeting entity.
     *
     * @Route("/new", name="schoolmeeting_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $schoolmeeting = new Schoolmeeting();
        $form = $this->createForm('ElitBundle\Form\SchoolmeetingType', $schoolmeeting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($schoolmeeting);
            $em->flush();

            return $this->redirectToRoute('schoolmeeting_show', array('id' => $schoolmeeting->getId()));
        }

        return $this->render('schoolmeeting/new.html.twig', array(
            'schoolmeeting' => $schoolmeeting,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a schoolmeeting entity.
     *
     * @Route("/{id}", name="schoolmeeting_show")
     * @Method("GET")
     */
    public function showAction(Schoolmeeting $schoolmeeting)
    {
        $deleteForm = $this->createDeleteForm($schoolmeeting);

        return $this->render('schoolmeeting/show.html.twig', array(
            'schoolmeeting' => $schoolmeeting,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing schoolmeeting entity.
     *
     * @Route("/{id}/edit", name="schoolmeeting_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Schoolmeeting $schoolmeeting)
    {
        $deleteForm = $this->createDeleteForm($schoolmeeting);
        $editForm = $this->createForm('ElitBundle\Form\SchoolmeetingType', $schoolmeeting);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('schoolmeeting_edit', array('id' => $schoolmeeting->getId()));
        }

        return $this->render('schoolmeeting/edit.html.twig', array(
            'schoolmeeting' => $schoolmeeting,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a schoolmeeting entity.
     *
     * @Route("/{id}", name="schoolmeeting_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Schoolmeeting $schoolmeeting)
    {
        $form = $this->createDeleteForm($schoolmeeting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($schoolmeeting);
            $em->flush();
        }

        return $this->redirectToRoute('schoolmeeting_index');
    }

    /**
     * Creates a form to delete a schoolmeeting entity.
     *
     * @param Schoolmeeting $schoolmeeting The schoolmeeting entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Schoolmeeting $schoolmeeting)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('schoolmeeting_delete', array('id' => $schoolmeeting->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
