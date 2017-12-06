<?php

namespace OC\Platform2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
        return $this->render(
            '@OCPlatform2/Advert/index.html.twig',
            array(
                "nom" => "Aurore"
            ));
    }
    public function viewAction($id)
    {
        return new Response("Affichage de l'annonce d'id : ".$id);
    }

    public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }
}