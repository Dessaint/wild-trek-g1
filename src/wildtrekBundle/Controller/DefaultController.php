<?php

namespace wildtrekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wildtrekBundle:Default:index.html.twig');
    }
}
