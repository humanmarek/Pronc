<?php

namespace Pronc\RweshBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('ProncRweshBundle:Default:index.html.twig', array());
    }
}
