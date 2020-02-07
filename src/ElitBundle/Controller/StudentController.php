<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
public function ajoutAction(Request $request)
    {
        $student = new Student();
        $student->setMoyenne("17");
        $student->setUsername("userHerite");
        $student->setEmail("ss@ss.fr");
        $student->setPassword("1");
        $student->setName("Issouuu");
        $birthday = new \DateTime('1999-03-14');
        $student->setBirthDate($birthday);

        $em=$this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();
        return $this->render('@Elit/Default/index.html.twig');
        }


public function afficheAction(Request $request)
{

    $student=$this->getDoctrine()->getRepository(Student::class)->findAll();

    return $this->render('@Elit/Default/affiche.html.twig',array('tabS'=>$student));
}





}
