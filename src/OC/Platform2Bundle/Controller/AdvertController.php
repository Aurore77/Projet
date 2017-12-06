<?php

namespace OC\Platform2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdvertController extends Controller
{
    public function indexAction()
    {
        // Obtenir une URL relative /platform/advert/id
        // Méthode longue
        /*$url = $this->get('router')->generate(
            'oc_platform_view',
            array('id' => 5)
        );*/
        // Méthode courte
        $url = $this->generateUrl('oc_platform_home');

        // Obtenir une URL absolue avec http://...
        /*$url = $this->get('router')->generate(
            'oc_platform_home', array(), UrlGeneratorInterface::ABSOLUTE_URL
        );*/


        return new Response("l'url de l'annonce d'id 5 est : ".$url);
//        return $this->render(
//            '@OCPlatform2/Advert/index.html.twig',
//            array(
//                "nom" => "Aurore"
//            ));
    }
    public function viewAction($id)
    {
        return $this->render(
            '@OCPlatform2/Advert/index.html.twig', array(
                "advert_id" => 10,
                "nom" => "Aurore"
            )
        );
//        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }
}