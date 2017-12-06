<?php

namespace OC\Platform2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@OCPlatform2/Default/index.html.twig');
    }
}
