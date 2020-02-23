<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Lessons;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Lesson controller.
 *
 */
class LessonsController extends Controller
{
    /**
     * Lists all lesson entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lessons = $em->getRepository('ElitBundle:Lessons')->findAll();

        return $this->render('lessons/index.html.twig', array(
            'lessons' => $lessons,
        ));
    }

    /**
     * Creates a new lesson entity.
     *
     */
    public function newAction(Request $request)
    {
        $lesson = new Lessons();
        $form = $this->createForm('ElitBundle\Form\LessonsType', $lesson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lesson);
            $em->flush();

            return $this->redirectToRoute('lessons_show', array('id' => $lesson->getId()));
        }

        return $this->render('lessons/new.html.twig', array(
            'lesson' => $lesson,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lesson entity.
     *
     */
    public function showAction(Lessons $lesson)
    {
        $deleteForm = $this->createDeleteForm($lesson);

        return $this->render('lessons/show.html.twig', array(
            'lesson' => $lesson,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lesson entity.
     *
     */
    public function editAction(Request $request, Lessons $lesson)
    {
        $deleteForm = $this->createDeleteForm($lesson);
        $editForm = $this->createForm('ElitBundle\Form\LessonsType', $lesson);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lessons_edit', array('id' => $lesson->getId()));
        }

        return $this->render('lessons/edit.html.twig', array(
            'lesson' => $lesson,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lesson entity.
     *
     */
    public function deleteAction(Request $request, Lessons $lesson)
    {
        $form = $this->createDeleteForm($lesson);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lesson);
            $em->flush();
        }

        return $this->redirectToRoute('lessons_index');
    }

    /**
     * Creates a form to delete a lesson entity.
     *
     * @param Lessons $lesson The lesson entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lessons $lesson)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lessons_delete', array('id' => $lesson->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
