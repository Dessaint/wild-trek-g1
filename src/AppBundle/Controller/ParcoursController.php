<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ParcoursController extends Controller
{
    /**
     * @Route("/", name="parcours")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();

        $request = $em->getRepository('AppBundle:Parcours')->findOneByIduser($user->getId());
        
        return $this->render('default/parcours.html.twig', array(
            'request' => $request,
        ));
    }
}
