<?php

namespace eventro\EventroBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //$currentuser = 'admin';
        $currentuser = $this->getUser();
        return $this->render('eventroEventroBundle:Default:index.html.twig', array('name' => $currentuser));
    }
}
