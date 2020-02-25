<?php

namespace ElitBundle\Controller;

use DateTime;
use ElitBundle\Entity\Club;
use ElitBundle\Entity\complaints;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Complaint controller.
 *
 * @Route("complaints")
 */
class complaintsController extends Controller
{
    /**
     * Lists all complaint entities.
     *
     * @Route("/", name="complaints_index")
     * @Method("GET")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $complaints = $em->getRepository('ElitBundle:complaints')->findAll();
//        $pagination = $paginator->paginate(
//            $query, /* query NOT result */
//            $request->query->getInt('page', 1), /*page number*/
//            10 /*limit per page*/
//        );
//
//        return $this->render('complaints/index.html.twig', array(
//            'complaints' => $complaints,
//        ));
        $complaints = $this->getDoctrine()->getRepository('ElitBundle:complaints')->findAll();

        $complaints = $this->get('knp_paginator')->paginate(
            $complaints, $request->query->get('page',1)/*page number*/,
            2 /*limit per page*/
        );
        return $this->render('complaints/index.html.twig', array(
            'complaints' => $complaints
        ));
    }


    /**
     * Finds and displays a complaint entity.
     *
     * @Route("/{id}", name="complaints_show")
     * @Method("GET")
     */

    public function newAction(Request $request)
    {
        $complaints = new complaints();
        $complaints->setDate(new DateTime());
        $form = $this->createForm('ElitBundle\Form\ComplaintsType', $complaints);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($complaints);
            $em->flush();

            return $this->redirectToRoute('complaints_show', array('id' => $complaints->getId()));
        }

        return $this->render('complaints/new.html.twig', array(
            'complaints' => $complaints,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a complaint entity.
     *
     */
    public function showAction(complaints $complaints)
    {
        $deleteForm = $this->createDeleteForm($complaints);

        return $this->render('complaints/show.html.twig', array(
            'complaints' => $complaints,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing complaints entity.
     * @param Request $request
     * @param complaints $complaints
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request, complaints $complaints)
    {
        $deleteForm = $this->createDeleteForm($complaints);
        $editForm = $this->createForm('ElitBundle\Form\ClubType', $complaints);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('complaints_edit', array('id' => $complaints->getId()));
        }

        return $this->render('complaints/edit.html.twig', array(
            'complaints' => $complaints,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a club entity.
     * @param Request $request
     * @param complaints $complaints
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, complaints $complaints)
    {
        $form = $this->createDeleteForm($complaints);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($complaints);
            $em->flush();
        }

        return $this->redirectToRoute('complaints_index');
    }

    /**
     * Creates a form to delete a complaint entity.
     *
     * @param complaints $complaints The complaint entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(complaints $complaints)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('complaints_delete', array('id' => $complaints->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    public function searchAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $complaints =  $em->getRepository('ElitBundle:complaints')->findEntitiesByString($requestString);
        if(!$complaints) {
            $result['complaints']['error'] = "Complaint Not found :( ";
        } else {
            $result['complaints'] = $this->getRealEntities($complaints);
        }
        return new Response(json_encode($result)); }

    public function getRealEntities($complaints){
        foreach ($complaints as $complaints){
            $realEntities[$complaints->getId()] = [$complaints->getDate(),$complaints->getTitle()];

        }
        return $realEntities;
    }


}