<?php

namespace ElitBundle\Controller;

use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use ElitBundle\Entity\Event;
use ElitBundle\Entity\Notification;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Event controller.
 *
 */
class EventController extends Controller
{
    /**
 * Lists all event entities.
 *
 */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ElitBundle:Event')->findAll();
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('event/index.html.twig', array(
            'events' => $events, 'notifications' => $notif,
        ));
    }


    /**
     * Lists all event entities.
     *
     */
    public function impAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ElitBundle:Event')->findAll();
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('event/table.html.twig', array(
            'events' => $events, 'notifications' => $notif
        ));
    }

    /**
     * Creates a new event entity.
     *
     */
    public function newAction(Request $request)
    {
        $event = new Event();
        $form = $this->createForm('ElitBundle\Form\EventType', $event);
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
                $event->setLogo($newFilename);
            }
            else {
                $event->setLogo("u.png");
            }
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('event_show', array('id' => $event->getId(),));
        }}catch (UniqueConstraintViolationException $e)
{
    $form->get('idClassroom')->addError(new FormError('Classroom unavailable at this date !'));
}


        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();

        return $this->render('event/new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),
            'notifications' => $notif,
        ));
    }

    /**
     * Finds and displays a event entity.
     *
     */
    public function showAction(Event $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('event/show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif,
        ));
    }

    /**
     * Displays a form to edit an existing event entity.
     *
     */
    public function editAction(Request $request, Event $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('ElitBundle\Form\EventType', $event);
        $editForm->handleRequest($request);
try{
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $pictureFile = $editForm->get('logo')->getData();



            if ($pictureFile) {

                //delete old
                $file=$event->getLogo();
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

                $event->setLogo($newFilename);
            }

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('event_edit', array('id' => $event->getId()));
        }}catch (UniqueConstraintViolationException $e)
{
$editForm->get('idClassroom')->addError(new FormError('Classroom unavailable at this date !'));
}
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('event/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'notifications' => $notif
        ));
    }

    /**
     * Deletes a event entity.
     *
     */
    public function deleteAction(Request $request, Event $event)
    {
        $form = $this->createDeleteForm($event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //delete old
            $file=$event->getLogo();
            if($file!="u.png") {
                $path = $this->getParameter('pictures_directory') . '/' . $file;
                $fs = new Filesystem();
                $fs->remove(array($path));
            }
            //
            $em->remove($event);
            $em->flush();
        }

        return $this->redirectToRoute('event_index');
    }

    public function delAction($id)
    {
    $em=$this->getDoctrine()->getManager();
        $event = $em->getRepository('ElitBundle:Event')->find($id);
            //delete old
            $file=$event->getLogo();
            if($file!="u.png") {
                $path = $this->getParameter('pictures_directory') . '/' . $file;
                $fs = new Filesystem();
                $fs->remove(array($path));
            }
            //
            $em->remove($event);
            $em->flush();

        return $this->redirectToRoute('event_index');

    }



    /**
     * Lists all event entities.
     *
     */
    public function calendarAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ElitBundle:Event')->findAll();

        return $this->render('event/calendar.html.twig', array(
            'events' => $events,
        ));
    }

    /**
     * prints the calendar
     * @return PdfResponse
     */
    public function pdfAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ElitBundle:Event')->findAll();

        $pageUrl = $this->render('event/pdf.html.twig', array('events'=>$events));
        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($pageUrl),
            'events.pdf'
        );

    }




    /**
     * Creates a form to delete a event entity.
     *
     * @param Event $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Event $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $event->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
