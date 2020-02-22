<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\CategoryBook;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorybook controller.
 *
 */
class CategoryBookController extends Controller
{
    /**
     * Lists all categoryBook entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoryBooks = $em->getRepository('ElitBundle:CategoryBook')->findAll();

        return $this->render('categorybook/index.html.twig', array(
            'categoryBooks' => $categoryBooks,
        ));
    }

    /**
     * Creates a new categoryBook entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoryBook = new Categorybook();
        $form = $this->createForm('ElitBundle\Form\CategoryBookType', $categoryBook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryBook);
            $em->flush();

            return $this->redirectToRoute('categorybook_show', array('id' => $categoryBook->getId()));
        }

        return $this->render('categorybook/new.html.twig', array(
            'categoryBook' => $categoryBook,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoryBook entity.
     *
     */
    public function showAction(CategoryBook $categoryBook)
    {
        $deleteForm = $this->createDeleteForm($categoryBook);

        return $this->render('categorybook/show.html.twig', array(
            'categoryBook' => $categoryBook,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoryBook entity.
     *
     */
    public function editAction(Request $request, CategoryBook $categoryBook)
    {
        $deleteForm = $this->createDeleteForm($categoryBook);
        $editForm = $this->createForm('ElitBundle\Form\CategoryBookType', $categoryBook);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorybook_edit', array('id' => $categoryBook->getId()));
        }

        return $this->render('categorybook/edit.html.twig', array(
            'categoryBook' => $categoryBook,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categoryBook entity.
     *
     */
    public function deleteAction(Request $request, CategoryBook $categoryBook)
    {
        $form = $this->createDeleteForm($categoryBook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryBook);
            $em->flush();
        }

        return $this->redirectToRoute('categorybook_index');
    }

    /**
     * Creates a form to delete a categoryBook entity.
     *
     * @param CategoryBook $categoryBook The categoryBook entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategoryBook $categoryBook)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorybook_delete', array('id' => $categoryBook->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
