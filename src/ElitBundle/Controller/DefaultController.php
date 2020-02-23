<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $notif = $this->getDoctrine()->getRepository(Notification::class)->findAll();
        return $this->render('backAdmin.html.twig', array('notifications' => $notif));
    }
}
