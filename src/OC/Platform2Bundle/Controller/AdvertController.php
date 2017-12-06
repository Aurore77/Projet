<?php

namespace OC\Platform2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
//use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        return $this->render('@OCPlatform2/Advert/view.html.twig', array(
            'id' => $id
        ));
    }

    public function viewSlugAction($slug, $year, $format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );
    }

    public function addAction(Request $request)
    {
        $session = $request->getSession();

        // Bien sûr, cette méthode devra réellement ajouter l'annonce

        // Mais faisons comme si c'était le cas
        $session->getFlashBag()->add('info', 'Annonce bien enregistrée');

        // Le « flashBag » est ce qui contient les messages flash dans la session
        // Il peut bien sûr contenir plusieurs messages :
        $session->getFlashBag()->add('info', 'Oui oui, elle est bien enregistrée !');

        // Puis on redirige vers la page de visualisation de cette annonce
        return $this->redirectToRoute('oc_platform_view', array('id' => 5));
    }
}