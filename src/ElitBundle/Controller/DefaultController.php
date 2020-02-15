<?php

namespace ElitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Elit/Default/index.html.twig');
    }
//    public function signinAction()
//    {
//        return $this->render('login.html.twig') ;
//    }
//    public function signupAction()
//    {
//        return $this->render('register.html.twig') ;
//    }
}
