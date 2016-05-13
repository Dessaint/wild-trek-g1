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

  /**
     * @Route("/", name="user_parcours")
     */
    public function espacemodifAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $discipline = $request->request->get('discipline');
        $depart = $request->request->get('depart');
        $arrivée = $request->request->get('arrivée');
        $avis = $request->request->get('avis');
        $heure_depart = $request->request->get('HeureDepart');
        $heure_arrivee = $request->request->get('HeureArrivee');

        $hidden = $request->request->get('hidden');

        $requestinfos = $em->getRepository('AppBundle:Parcours')->findOneByIduser($user->getId());

        if ($hidden == 1){
            if (!empty($discipline)) {
                $requestinfos->setDiscipline($discipline);
            }
            if (!empty($depart)) {
                $requestinfos->setDepart($depart);
            }
            if (!empty($arrivée)) {
                $requestinfos->setArrivée($arrivée);
            }
            if (!empty($avis)) {
                $requestinfos->setAvis($avis);
            }
            if (!empty($heure_depart)) {
                $requestinfos->setHeureDepart($heureDepart);
            }
            if (!empty($heure_arrivee)) {
                $requestinfos->setHeureArrivee($heureArrivee);
            }
        
            $em->persist($requestinfos);
            $em->flush();
        }
        return $this->render('default/parcours.html.twig', array(
            'requete_infos' => $requestinfos,
        ));   
    }
}
