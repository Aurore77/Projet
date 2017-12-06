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
}