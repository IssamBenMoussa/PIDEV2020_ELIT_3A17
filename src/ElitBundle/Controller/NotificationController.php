<?php

namespace ElitBundle\Controller;

use ElitBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class NotificationController extends Controller
{
    function DisplayAction()
    {
        return $this->render('notifications/notification.html.twig');
    }
    public function ajaxAction(Request $request) {
        $notification = $this->getDoctrine()
            ->getRepository(Notification::class)->findAll();
            $jsonData = array();
            $idx = 0;
            foreach($notification as $notif) {
                $temp = array(
                    'Title' => $notif->getTitle(),
                    'Description' => $notif->getDescription(),
                    'Icon' => $notif->getIcon(),
                    'Route' => $notif->getRoute(),
                    'Params' => $notif->getParameters(),
                    'Date' => $notif->getDate(),
                    'FullUrl' => $notif->getFullUrl(),
                    'Seen' => $notif->isSeen(),

                );
                $jsonData[$idx++] = $temp;
            }
            return new JsonResponse($jsonData);


    }
}
