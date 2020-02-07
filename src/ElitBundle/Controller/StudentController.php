<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Classes;
use ElitBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
public function ajoutAction(Request $request)
    {
        $student = new Student();
        $student->setUsername("student2");
        $student->setEmail("seggs@ss.fr");
        $student->setPassword("123456789");
        $student->setEnabled(True);
        $student->addRole('ROLE_STUDENT');
        $student->setEmailParent("papa@papa.fr");
        $student->setPhoneNumber(9898899);
        $student->setProfilePicture("4");
        $student->setFirstname("issam");
        $student->setLastname("missou");
        $class= $this->getDoctrine()->getRepository(Classes::class)->find(2);
        $student->setIdClass($class);


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
