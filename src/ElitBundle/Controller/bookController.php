<?php

namespace ElitBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ElitBundle\Entity\book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Book controller.
 *
 */
class bookController extends Controller
{
    /**
     * Lists all book entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('ElitBundle:book')->findAll();

        return $this->render('book/index.html.twig', array(
            'books' => $books,
        ));
    }
    public function showbookAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('ElitBundle:book')->findAll();

        return $this->render('book/bookfront.html.twig', array(
            'books' => $books,
        ));
    }

    public function showbookfrontAction(book $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        return $this->render('book/showfront.html.twig', array(
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Creates a new book entity.
     *
     */
    public function newAction(Request $request)
    {
        $book = new Book();
        $form = $this->createForm('ElitBundle\Form\bookType', $book);
        $form->handleRequest($request);
        try{
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $pictureFile = $form->get('imagebook')->getData();


            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();


                try {
                    $pictureFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $book->setImagebook($newFilename);
            }
            else {
                $book->setImagebook("empty.png");
            }




            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book_show', array('id' => $book->getId()));
        }
        }catch (UniqueConstraintViolationException $e)
        {
        }
        return $this->render('book/new.html.twig', array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a book entity.
     *
     */
    public function showAction(book $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        return $this->render('book/show.html.twig', array(
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Displays a form to edit an existing book entity.
     *
     */
    public function editAction(Request $request, book $book)
    {
        $deleteForm = $this->createDeleteForm($book);
        $editForm = $this->createForm('ElitBundle\Form\bookType', $book);
        $editForm->handleRequest($request);

        try{
            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $pictureFile = $editForm->get('imagebook')->getData();


                if ($pictureFile) {
                    $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);

                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();


                    try {
                        $pictureFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }
                    $book->setImagebook($newFilename);
                }
                else {
                    $book->setImagebook("empty.png");
                }




                $em->persist($book);
                $em->flush();

                return $this->redirectToRoute('book_show', array('id' => $book->getId()));
            }
        }catch (UniqueConstraintViolationException $e)
        {
        }
        return $this->render('book/new.html.twig', array(
            'book' => $book,
            'form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Deletes a book entity.
     *
     */
    public function deleteAction(Request $request, book $book)
    {
        $form = $this->createDeleteForm($book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
        }

        return $this->redirectToRoute('book_index');
    }

    /**
     * Creates a form to delete a book entity.
     *
     * @param book $book The book entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(book $book)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('book_delete', array('id' => $book->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
