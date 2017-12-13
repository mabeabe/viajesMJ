<?php

namespace ViajesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ViajesBundle:Default:index.html.twig');
    }
}
