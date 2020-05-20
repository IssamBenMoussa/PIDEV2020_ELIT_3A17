<?php

namespace ElitBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ElitBundle\Entity\application;
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
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $books = $em->getRepository('ElitBundle:book')->findAll();
//
//        return $this->render('book/index.html.twig', array(
//            'books' => $books,
//        ));
//    }
    public function indexAction(Request $request)
    {
//
        $books = $this->getDoctrine()->getRepository('ElitBundle:book')->findAll();

        $books = $this->get('knp_paginator')->paginate(
            $books, $request->query->get('page',1)/*page number*/,
            3 /*limit per page*/
        );
        return $this->render('book/index.html.twig', array(
            'books' => $books
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
    public function statAction()
    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine();
        $books = $em->getRepository(book::class)->findAll();
        $totalEtudiant=0;
        foreach($books as $book) {
            $totalEtudiant=$totalEtudiant+$book->getnbrbooks();
        }

        $data= array();
        $stat=['classe', 'nbEtudiant'];
        $nb=0;
        array_push($data,$stat);
        foreach($books as $book) {
            $stat=array();
            array_push($stat,$book->getisbn(),(($book->getnbrbooks()) *100)/$totalEtudiant);
            $nb=($book->getnbrbooks() *100)/$totalEtudiant;
            $stat=[$book->getisbn(),$nb];
            array_push($data,$stat);

        }

        $data= array();
        $stat=['book', 'nbrbooks'];
        $nb=0;
        array_push($data,$stat);



        $pieChart->getData()->setArrayToDataTable(
            $data
        );

        $pieChart->getOptions()->setTitle('  Nbr books' , );
        $pieChart->getOptions()->setHeight(1000);
        $pieChart->getOptions()->setWidth(2000);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(30);


        return $this->render('book/stat.html.twig', array(
                'piechart' => $pieChart,
            )

        );
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
