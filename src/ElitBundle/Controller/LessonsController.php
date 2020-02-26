<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Lessons;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;


/**
 * Lesson controller.
 *
 */
class LessonsController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lessons = $em->getRepository('ElitBundle:Lessons')->findAll();

        return $this->render('lessons/index.html.twig', array(
            'lessons' => $lessons,
        ));
    }


    public function findOneByIdJoinedToCategory($id)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p, c
        FROM App\Entity\Lessons p
        INNER JOIN p.category c
        WHERE p.id = :id'
        )->setParameter('id', $id);

        return $query->getOneOrNullResult();
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



            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $lesson->setBrochureFilename($newFilename);
            }

            // ... persist the $product variable or any other work



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
