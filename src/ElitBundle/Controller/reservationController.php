<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\reservation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reservation controller.
 *
 */
class reservationController extends Controller
{
    /**
     * Lists all reservation entities.
     *
     */
    public function indexAction()
    {
        $valeurr=$this->getUser();

        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('ElitBundle:reservation')->findBy(array('name' => "$valeurr"));

        return $this->render('reservation/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }
    public function backshowAction()
    {

        $em = $this->getDoctrine()->getManager();
        $reservations = $em->getRepository('ElitBundle:reservation')->findAll();

        return $this->render('reservation/indexfront.html.twig', array(
            'reservations' => $reservations,
        ));
    }
    /**
     * Creates a new reservation entity.
     *
     */
    public function newAction(Request $request)
    {
        $reservation = new Reservation();
        $form=$this->createFormBuilder($reservation)
            ->add('email')
            ->add('booktitle')
            ->add('datereservation')
            ->add('datereturn')
            ->getForm();
        $form->handleRequest($request);

        $reservation->setName($this->getUser());

        $reservation->setState('In progress');
        $reservation->setMessage('Thanks for waiting');
        $reservation->setStudentkey('******');



        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservation entity.
     *
     */
    public function showAction(reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function showbackAction(reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservation/showfront.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservation entity.
     *
     */
    public function editAction(Request $request, reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $reservation->setState('approved');
        $reservation->setMessage('use the key to get your book');
        $reservation->setStudentkey('');
        $editForm=$this->createFormBuilder($reservation)
            ->add('state')
            ->add('message')
            ->add('studentkey')
            ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function refuseAction(Request $request, reservation $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $reservation->setState('not approved');
        $reservation->setMessage('');
        $reservation->setStudentkey('');
        $editForm=$this->createFormBuilder($reservation)
            ->add('state')
            ->add('message')
            ->add('studentkey')
            ->getForm();
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservation_edit', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a reservation entity.
     *
     */
    public function deleteAction(Request $request, reservation $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservation_index');
    }

    /**
     * Creates a form to delete a reservation entity.
     *
     * @param reservation $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(reservation $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservation_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
