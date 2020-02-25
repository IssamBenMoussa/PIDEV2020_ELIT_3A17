<?php

namespace ElitBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use ElitBundle\Entity\application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Application controller.
 *
 */
class applicationController extends Controller
{
    /**
     * Lists all application entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $applications = $em->getRepository('ElitBundle:application')->findAll();

        return $this->render('application/index.html.twig', array(
            'applications' => $applications,
        ));
    }

    /**
     * Creates a new application entity.
     *
     */
    public function newAction(Request $request)
    {
        $application = new Application();
        $form = $this->createForm('ElitBundle\Form\applicationType', $application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($application);
            $em->flush();

            return $this->redirectToRoute('application_show', array('id' => $application->getId()));
        }

        return $this->render('application/new.html.twig', array(
            'application' => $application,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a application entity.
     *
     */
    public function showAction(application $application)
    {
        $deleteForm = $this->createDeleteForm($application);

        return $this->render('application/show.html.twig', array(
            'application' => $application,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing application entity.
     *
     */
    public function editAction(Request $request, application $application)
    {
        $deleteForm = $this->createDeleteForm($application);
        $editForm = $this->createForm('ElitBundle\Form\applicationType', $application);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('application_edit', array('id' => $application->getId()));
        }

        return $this->render('application/edit.html.twig', array(
            'application' => $application,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a application entity.
     *
     */
    public function deleteAction(Request $request, application $application)
    {
        $form = $this->createDeleteForm($application);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($application);
            $em->flush();
        }

        return $this->redirectToRoute('application_index');
    }

    /**
     * Creates a form to delete a application entity.
     *
     * @param application $application The application entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(application $application)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('application_delete', array('id' => $application->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

        public function statAction()
    {
        $pieChart = new PieChart();
        $em= $this->getDoctrine();
        $classes = $em->getRepository(application::class)->findAll();
        $totalEtudiant=0;
        foreach($classes as $classe) {
            $totalEtudiant=$totalEtudiant+$classe->getfrais();
        }

        $data= array();
        $stat=['classe', 'nbEtudiant'];
        $nb=0;
        array_push($data,$stat);
        foreach($classes as $classe) {
            $stat=array();
            array_push($stat,$classe->getniveauscolaire(),(($classe->getfrais()) *100)/$totalEtudiant);
            $nb=($classe->getfrais() *100)/$totalEtudiant;
            $stat=[$classe->getniveauscolaire(),$nb];
            array_push($data,$stat);

        }


        $pieChart->getData()->setArrayToDataTable(
                $data
            );

            $pieChart->getOptions()->setTitle('         PAYMENT PER GRADE' , );
            $pieChart->getOptions()->setHeight(1000);
            $pieChart->getOptions()->setWidth(2000);
            $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
            $pieChart->getOptions()->getTitleTextStyle()->setFontSize(30);


            return $this->render('application/stat.html.twig', array(
                    'piechart' => $pieChart,
                )

            );
        }
}
