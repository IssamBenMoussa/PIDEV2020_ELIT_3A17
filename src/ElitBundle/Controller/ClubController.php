<?php

namespace ElitBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ElitBundle\Entity\Club;
use ElitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Club controller.
 *
 */
class ClubController extends Controller
{
    /**
     * Lists all club entities.
     *
     */
    public function indexAction(Request $request)
    {
        $paginator=$this->get('knp_paginator');
        $em = $this->getDoctrine()->getManager();
        $clubRep = $em->getRepository(Club::class);
        $allClubsQuery = $clubRep->createQueryBuilder('c')->getQuery();

        $clubs = $paginator->paginate(
            $allClubsQuery,
            $request->query->getInt('page', 1),
            3

        );
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('club/index.html.twig', array('notifications'=>$notif, 'pagination' => $clubs));

    }

    /**
     * Creates a new club entity.
     *
     */
    public function newAction(Request $request)
    {
        $club = new Club();
        $form = $this->createForm('ElitBundle\Form\ClubType', $club);
        $form->handleRequest($request);
try{
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $pictureFile = $form->get('logo')->getData();



            if ($pictureFile) {
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();


                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $club->setLogo($newFilename);
            }
            else {
                $club->setLogo("u.png");
            }




            $em->persist($club);
            $em->flush();
            $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
            return $this->redirectToRoute('club_show', array('id' => $club->getId()));
        }
}catch (UniqueConstraintViolationException $e)
{
    $form->get('president')->addError(new FormError('Duplicated value !'));
}       $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('club/new.html.twig', array(
            'club' => $club,
            'form' => $form->createView(),
            'notifications' => $notif
        ));
    }

    /**
     * Finds and displays a club entity.
     *
     */
    public function showAction(Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('club/show.html.twig', array(
            'club' => $club,
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif
        ));
    }

    /**
     * Displays a form to edit an existing club entity.
     *
     */
    public function editAction(Request $request, Club $club)
    {
        $deleteForm = $this->createDeleteForm($club);
        $editForm = $this->createForm('ElitBundle\Form\ClubType', $club);
        $editForm->handleRequest($request);
try{
        if ($editForm->isSubmitted() && $editForm->isValid()) {


            $pictureFile = $editForm->get('logo')->getData();



            if ($pictureFile) {

                //delete old
                $file=$club->getLogo();
                if($file!="u.png") {
                    $path = $this->getParameter('pictures_directory') . '/' . $file;
                    $fs = new Filesystem();
                    $fs->remove(array($path));
                }
                //
                $originalFilename = pathinfo($pictureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$pictureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $pictureFile->move(
                        $this->getParameter('pictures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $club->setLogo($newFilename);
            }


            $this->getDoctrine()->getManager()->flush();
            $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
            return $this->redirectToRoute('club_edit', array('id' => $club->getId(), 'notifications'=>$notif));
        }
}catch (UniqueConstraintViolationException $e)
{
    $editForm->get('president')->addError(new FormError('Duplicated value !'));
}

        return $this->render('club/edit.html.twig', array(
            'club' => $club,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a club entity.
     *
     */
    public function deleteAction(Request $request, Club $club)
    {
        $form = $this->createDeleteForm($club);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //delete old
            $file=$club->getLogo();
            if($file!="u.png"){
            $path=$this->getParameter('pictures_directory').'/'.$file;
            $fs = new Filesystem();
            $fs->remove(array($path));
            }
            //


            $em = $this->getDoctrine()->getManager();
            $em->remove($club);
            $em->flush();
        }

        return $this->redirectToRoute('club_index');
    }

    /**
     * Creates a form to delete a club entity.
     *
     * @param Club $club The club entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Club $club)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('club_delete', array('id' => $club->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
